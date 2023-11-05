<?php

namespace App\Http\Controllers;

use App\Models\order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders=order::all();
        return view('orders',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $accessories= \App\Models\accessory::all();
        $cars= \App\Models\car::all();
        $title='Crea';
        $order=new order();
        return view('orderForm',compact('title','accessories','cars','order'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $order = Order::create($request->all()); //popolo "$article" con un nuovo record per la mia tabella article,sarà popolata con i valori del mio form "$request->all()"

        $order->accessories()->attach($request->accessories);

        return redirect()->back()->with(['success' => 'Ordine creato con successo']);
    }

    /**
     * Display the specified resource.
     */
    public function show(order $order)
    {
        return view('order',compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(order $order)
    {
        $accessories= \App\Models\accessory::all();
        $cars= \App\Models\car::all();
        $title='Modifica';
        return view('orderForm',compact('title','accessories','cars','order'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, order $order)
    {
        $order->update($request->all());

        $order->accessories()->detach();
        $order->accessories()->attach($request->accessories);

        return redirect()->route('orders.index')->with(['success' => 'Ordine modificato con successo']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(order $order)

    {
        $order->accessories()->detach();

        $order->delete();

        return redirect()->back()->with(['success' => 'Articolo eliminato']);
    }
}
