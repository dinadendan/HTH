<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function order(Request $request){

        $request->validate([
            'user_id' => 'required|int|max:255',
            'receiving_date' => 'required|date|max:255',
            'type' => 'required|string|max:255',
            'nameOfType' => 'required|string|max:255',
            'amount' => 'required|string|max:255',
        ]);

        $order = Order::create([
            'user_id' => $request->user_id,
            'receiving_date' => $request->receiving_date,
            'type' => $request->type,
            'nameOfType' => $request->nameOfType,
            'amount' => $request->amount,
        ]);

        $order->save();


//        $token = Auth::login($order);

        return response()->json([
            'status' => 'success',
            'message' => 'Order sent successfully',
            'order' => $order,
        ]);
    }

}
