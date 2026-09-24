<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::latest()->get();

        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        return view('orders.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'item_name' => 'required|string|max:255',
            'is_served' => 'nullable|boolean',
        ]);

        Order::create([
            'item_name' => $validated['item_name'],
            'is_served' => $request->boolean('is_served'),
        ]);

        return redirect()->route('orders.index');
    }

    public function edit(Order $order)
    {
        return view('orders.edit', compact('order'));
    }

    public function update(Request $request, Order $order)
    {
        $validated = $request->validate([
            'item_name' => 'required|string|max:255',
            'is_served' => 'nullable|boolean',
        ]);

        $order->update([
            'item_name' => $validated['item_name'],
            'is_served' => $request->boolean('is_served'),
        ]);

        return redirect()->route('orders.index');
    }

    public function destroy(Order $order)
    {
        $order->delete();

        return redirect()->route('orders.index');
    }
}