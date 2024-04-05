<?php

namespace App\Http\Controllers;


use App\Models\Cart;
use App\Models\Order;

use App\Models\OrderDetail;
use Illuminate\Http\Request;


class CheckoutController extends Controller
{

    public function checkout() {
        $auth = auth('cus')->user();
        $carts = Cart::where('customer_id',auth('cus')->id())->get();
        return view('home.checkout', compact('auth','carts'));
    }
    public function history() {
        $auth = auth('cus')->user();
        return view('home.history', compact('auth'));
    }
    public function detail(Order $order) {
        $auth = auth('cus')->user();
        return view('home.detail', compact('auth','order'));
    }

    public function post_checkout(Request $req) {
        $auth = auth('cus')->user();
    
        // Validate request data
        $req->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required'
        ]);
    
        // Get request data
        $data = $req->only('name','email','phone','address');
        $data['customer_id'] = $auth->id;
    
        // Calculate total price
        $totalPrice = Cart::where('customer_id', $auth->id)->sum('price');
    
        // Prevent checkout if total price is zero
        if($totalPrice == 0) {
            return redirect()->back()->with('error', 'Total price is zero. Please add items to your cart.');
        }
    
        // Create order if total price is not zero
        if($order = Order::create($data)) {
            $token = \Str::random(40);
    
            $carts = Cart::where('customer_id', $auth->id)->get();
            foreach($carts as $cart) {
                $data1 = [
                    'order_id' => $order->id,
                    'product_id' => $cart->product_id,
                    'price' => $cart->price,
                    'quantity' => $cart->quantity
                ];
    
                OrderDetail::create($data1);
            }
    
            // Delete carts
            $auth->carts()->delete();
            $order->token = $token;
            $order->save();
    
            // Return a confirmation message instead of sending an email
            return redirect()->back()->with('ok', '');
        }
    
        return redirect()->back();
    }
    
    

    public function verify($token) {
        $order = Order::where('token', $token)->first();
        if ($order) {
            $order->token = null;
            $order->status = 1;
            $order->save();
            return redirect()->route('home.index')->with('ok','Order verify successfully');
        }

        return abort(404);

    }
}
