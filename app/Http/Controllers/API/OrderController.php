<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Model\Order;
use App\Model\OrderItem;
use App\Http\Resources\OrderResource;
use Darryldecode\Cart\Facades\CartFacade;
use Illuminate\Support\Facades\Storage;
use App\Model\Product;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with(['items.product', 'user'])->get();
        return response()->json([
            'status' => true,
            'message' =>'All Order retrived',
            'data' => OrderResource::collection($orders),
        ]);
    }

    public function show($id)
    {
        $order = Order::with('items.product')->find($id);
        if (!$order) {
            return response()->json([
                'status' => false,
                'message' => '  order is not found',
                'data' => null
            ], 404);
        }

        return response()->json([
            'status' => true,
            'message' => 'Order Details ',
            'data' => new OrderResource($order)
        ]);
    }

    public function store(Request $request)
    {
        $cartItems = CartFacade::getContent();

        if ($cartItems->isEmpty()) {
            return response()->json([
                'status' => false,
                'message' => ' Cart is Empty',
                'data' => null
            ], 400);
        }

        $totalPrice = $cartItems->sum(function ($item) {
            return $item->price * $item->quantity;
        });

        $order = Order::create([
            'user_id' => Auth::id(),
            'total_price' => $totalPrice,
            'status' => 'completed',
        ]);

        foreach ($cartItems as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item->id,
                'size' => $item->attributes->size,
                'color' => $item->attributes->color,
                'quantity' => $item->quantity,
                'price' => $item->price,
            ]);
        }

        CartFacade::clear();

        return response()->json([
            'status' => true,
            'message' => 'you create order success',
            'data' => new OrderResource($order)
        ], 201);
    }

    public function destroy($id)
    {
        $order = Order::with('items')->find($id);

        if (!$order) {
            return response()->json([
                'status' => false,
                'message' => '  order is not found',
            ], 404);
        }

        foreach ($order->items as $item) {
            $product = Product::find($item->product_id);
            if (!$product) {
                // احذف الصور من الملفات فقط إذا لم يكن المنتج موجوداً
                $imagePath = public_path('images/' . $item->product->image ?? null);
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }
        }

        OrderItem::where('order_id', $order->id)->delete();
        $order->delete();

        return response()->json([
            'status' => true,
            'message' => 'you delete order success',
            'data' => null
        ]);
    }
}
