<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\File;

use App\Http\Requests\CategoryRequest;
use App\Model\category;
use App\Http\Resources\CategoryResource;

class categoriesController extends Controller {

    // show all category function

    public function index(): JsonResponse {
        $Category = CategoryResource::collection( category::orderBy( 'created_at', 'desc' )->paginate( 9 ) );
        return  response()->json( [
            'success'=>true,
            'massage'=>'all Category retrived',
            'date'=>$Category

        ], 201 );
    }

    // show one Category function

    public function show( $id ): JsonResponse {
        $Category = category::Find( $id ) ;

        if ( !$Category ) {
            return response()->json( [
                'success'=>false,
                'massage'=>' Category is not found',
                'date'=>$Category
            ], 404 );
        }
        return response()->json( [
            'success'=>true,
            'massage'=>' Category is showed',
            'date'=>$Category

        ], 201 );
    }

    // create Category function

    public function Store(CategoryRequest  $request ): JsonResponse {
        if ( $request->hasFile( 'image' ) ) {
            $image = $request->image;
            $imageName = rand( 1, 1000 ) . time() . '.' . $image->extension();
            $image->move( public_path( 'Category/image/' ), $imageName );
        }

        $Category = category::create( [
            'name' => $request->name,
            'image' => $imageName,

        ] );
        return  response()->json( [
            'success'=>true,
            'massage'=>' Category is created ',
            'date'=>$Category

        ], 201 );
    }

    // updete Category function

    public function update( CategoryRequest  $request , $id ): JsonResponse {
        $Category = category::Find( $id );

        if ( !$Category ) {
            return response()->json( [
                'success'=>false,
                'massage'=>' Category is not found',
                'date'=>$Category
            ], 404 );
        }
        if ( $request->hasFile( 'image' ) ) {
            if ( File::exists( public_path( 'Category/image/' . $Categorys->image ) ) ) {
                File::delete( public_path( 'Category/image/' . $Categorys->image ) );
            }
            ;
            $image = $request->image;
            $imageName = rand( 1, 1000 ) . time().'.'.$image->extension();
            $image->move( public_path( 'Category/image/' ), $imageName1 );
        }


        $Category->update( [
            'name' => $request->name,
            'image' => $imageName,

        ] );
        return  response()->json( [
            'success'=>true,
            'massage'=>' Category is update ',
            'date'=>$Category

        ], 201 );
    }

    // delete Category function

    public function delete( Request $request, $id ): JsonResponse {
        $Category = category::Find( $id );

        if ( !$Category ) {
            return response()->json( [
                'success'=>false,
                'massage'=>' Category is not found',
                'date'=>$Category
            ], 404 );
        }
        // delete image by using library file exist
        if ( !empty ( $Category->image ) && File::exists( public_path( 'Category/image/' . $Category->image ) ) ) {
            File::delete( public_path( 'Category/image/' . $Category->image ) );
        }
        ;

        $Category->delete();
        return  response()->json( [
            'success'=>true,
            'massage'=>' Category is deleted ',
            'date'=>null

        ], 201 );
    }
}
