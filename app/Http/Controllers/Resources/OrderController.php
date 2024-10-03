<?php

namespace App\Http\Controllers\Resources;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Helper\LogHelper as LH;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Order::with("user")->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $user_id, string $created_order_id, $amount, $status)
    {
        return LH::withEx("Saved Order in database...", "Error in saving order in database: ", function () use ($user_id, $created_order_id, $amount, $status) {
            return Order::create([
                "user_id" => $user_id,
                "created_order_id" => $created_order_id,
                "amount" => $amount,
                "status" => $status,
            ]);
        });
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(string $user_id, string $created_order_id, string $amount, string $status)
    {
        return $this->create($user_id, $created_order_id, $amount, $status);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Order::with("user")->findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($amount, $status, string $id) {}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Order::destroy($id);
        return response()->noContent();
    }
}
