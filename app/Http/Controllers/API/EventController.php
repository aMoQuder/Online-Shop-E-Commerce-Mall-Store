<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

use Illuminate\Http\JsonResponse;
use App\Http\Resources\EventsResource;

use App\Model\Events;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class EventController extends Controller {
    ///////////////////// Get All Eventss ///////////////////////

    public function index(): JsonResponse {
        $Eventss = EventsResource::collection ( Events::orderBy( 'created_at', 'desc' )->paginate( 3 ) );
        return response()->json( [
            'success' => true,
            'message' => 'Eventss retrieved successfully',
            'data' => $Eventss
        ], 200 );
    }

    ///////////////////// Store Events ///////////////////////

    public function store( Request $request ): JsonResponse {
        $validated = $request->validate( [
            'title' => 'required|string',
            'event_img' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required|min:5|max:2000',

        ] );

        $imageName = '';
        if ( $request->hasFile( 'image' ) ) {
            $image = $request->file( 'image' );
            $imageName = time() . '.' . $image->extension();
            $image->move( public_path( 'Events/img/' ), $imageName );
        }

        $Events = Events::create( [
            'title' => $request->title,
            'event_img' => $imageName,
            'description' => $request->description,

        ] );

        return response()->json( [
            'success' => true,
            'message' => 'Events created successfully',
            'data' => $Events
        ], 201 );
    }

    ///////////////////// Show Single Events ///////////////////////

    public function show( $id ): JsonResponse {
        $Events = Events::find( $id );

        if ( !$Events ) {
            return response()->json( [ 'success' => false, 'message' => 'Events not found' ], 404 );
        }

        return response()->json( [
            'success' => true,
            'message' => 'Events retrieved successfully',
            'data'=>new EventsResource( $Events ),
        ], 200 );
    }

    ///////////////////// Update Events ///////////////////////

    public function update( Request $request, $id ): JsonResponse {
        $Events = Events::find( $id );

        if ( !$Events ) {
            return response()->json( [ 'success' => false, 'message' => 'Events not found' ], 404 );
        }

        $validated = $request->validate( [
            'title' => 'required|string',
            'event_img' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required|min:5|max:2000',

        ] );

        $imageName = $Events->event_img;

        if ( $request->hasFile( 'image' ) ) {
            if ( !empty( $Events->image ) && File::exists( public_path( 'Events/img/' . $Events->event_img ) ) ) {
                File::delete( public_path( 'Events/img/' . $Events->event_img ) );
            }
            $image = $request->file( 'image' );
            $imageName = time() . '.' . $image->extension();
            $image->move( public_path( 'Events/img/' ), $imageName );
        }

        $Events->update( [
            'title' => $request->title,
            'event_img' => $imageName,
            'description' => $request->description,

        ] );

        return response()->json( [
            'success' => true,
            'message' => 'Events updated successfully',
            'data'=>new EventsResource( $Events ),
        ], 200 );
    }

    ///////////////////// Delete Events ///////////////////////

    public function delete( $id ): JsonResponse {
        $Events = Events::find( $id );

        if ( !$Events ) {
            return response()->json( [ 'success' => false, 'message' => 'Events not found' ], 404 );
        }

        if ( !empty( $Events->image ) && File::exists( public_path( 'Events/img/' . $Events->event_img ) ) ) {
            File::delete( public_path( 'Events/img/' . $Events->event_img ) );
        }

        $Events->delete();

        return response()->json( [
            'success' => true,
            'message' => 'Events deleted successfully',
            'data'=>new EventsResource( $Events ),

        ], 200 );
    }
}
