<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\File;

use App\Http\Requests\ProductRequest;
use App\Model\product;
use App\Http\Resources\ProductResource;

class ProductController extends Controller {

    // show all Product function

    public function index(): JsonResponse {
        $Product = ProductResource::collection( product::orderBy('created_at', 'desc')->paginate(9));
        return  response()->json( [
            'success'=>true,
            'massage'=>'all Products retrived',
            'date'=>$Product

        ], 201 );
    }

    // show one Product function

    public function show( $id ): JsonResponse {
        $Product = product::Find( $id ) ;

        if ( !$Product ) {
            return response()->json( [
                'success'=>false,
                'massage'=>' Product is not found',
                'date'=>$Product
            ], 404 );
        }
        return response()->json( [
            'success'=>true,
            'massage'=>' Product is showed',
            'date'=>new ProductResource( $Product)

        ], 201 );
    }

    // create Product function

    public function Store( ProductRequest $request ): JsonResponse {
        if ( $request->hasFile( 'image' ) ) {
            $image = $request->image;
            $imageName = rand( 1, 1000 ) . time() . '.' . $image->extension();
            $image->move( public_path( 'product/img/' ), $imageName );
        }

        $Product = Product::create( [
            'name' => $request->name,
            'price' => $request->price,
            'image' => $imageName,
            'description' => $request->description,
            'color_id' => $request->color_id,
            'size_id' => $request->size_id,
            'parent_id' => $request->parent_id,
        ] );
        return  response()->json( [
            'success'=>true,
            'massage'=>' Product is created ',
            'date'=>new ProductResource( $Product)

        ], 201 );
    }

    // updete Product function

    public function update( ProductRequest $request, $id ): JsonResponse {
        $Product = product::Find( $id );

        if ( !$Product ) {
            return response()->json( [
                'success'=>false,
                'massage'=>' Product is not found',
                'date'=>$Product
            ], 404 );
        }
        if ( $request->hasFile( 'image' ) ) {
            if ( File::exists( public_path( 'product/img/' . $Products->image ) ) ) {
                File::delete( public_path( 'product/img/' . $Products->image ) );
            }
            ;
            $image = $request->image;
            $imageName = rand( 1, 1000 ) . time().'.'.$image->extension();
            $image->move( public_path( 'product/img/' ), $imageName1 );
        }


        $Product->update( [
            'name' => $request->name,
            'price' => $request->price,
            'image' => $imageName,
            'description' => $request->description,
            'color_id' => $request->color_id,
            'size_id' => $request->size_id,
            'parent_id' => $request->parent_id,
        ] );
        return  response()->json( [
            'success'=>true,
            'massage'=>' Product is update ',
            'date'=>new ProductResource( $Product)

        ], 201 );
    }

    // delete Product function

    public function delete(Request $request, $id ): JsonResponse {
        $Product = product::Find( $id );

        if ( !$Product ) {
            return response()->json( [
                'success'=>false,
                'massage'=>' Product is not found',
                'date'=>$Product
            ], 404 );
        }
        // delete image by using library file exist
        if ( !empty ( $Products->image ) && File::exists( public_path( 'product/img/' . $Products->image ) ) ) {
            File::delete( public_path( 'product/img/' . $Products->image ) );
        }
        ;


        $Product->delete();
        return  response()->json( [
            'success'=>true,
            'massage'=>' Product is deleted ',
            'date'=>null

        ], 201 );
    }
}

