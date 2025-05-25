<?php

namespace App\Http\Controllers;

use App\Model\category;
use App\Model\color;
use App\Model\Order;
use App\Model\OrderItem;
use App\Model\product;
use App\Model\size;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('user', 'items.product')->get();
        return view('order.index', compact('orders'));
    }
    public function show(Order $order)
    {
        $color = color::all();
        $size = size::all();
        $order->load('items.product', 'user');
        return view('order.show', compact('order'), ["size" => $size, "color" => $color]);
    }

    // public function showItem(Order $order, OrderItem $item)
    // {
    //     if (!$order->items->contains($item)) {
    //         abort(404);
    //     }

    //     return view('admin.orders.item', compact('order', 'item'));
    // }


    public function destroy($id)
    {
        // البحث عن الطلب بواسطة الـ ID
        $order = Order::findOrFail($id);
//   (Order Items)  حذف صورة
        $orderImage = $order->items();
        $products = product::all();
        foreach ($orderImage->image as $itemOrder) {
            $found = false;
            foreach ($products as $item) {
                if ($itemOrder == $item->image) {
                    $found = true;
                }
            }
            if (!$found) {
                if (File::exists(public_path('product/image/' . $itemOrder))) {
                    File::delete(public_path('product/image/' . $itemOrder));
                };
            }
        }
        $order->items()->delete(); // حذف العناصر (Order Items) المرتبطة بالطلب
        $order->delete(); // حذف الطلب نفسه

        // إعادة توجيه مع رسالة نجاح
        return redirect()->route('orders.index')->with('success', 'Order deleted successfully.');
    }
}
