<?php

namespace App\Http\Controllers\Resources;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Helper\LogHelper as LH;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Transaction::with('order')->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(array $data)
    {
        if (!isset($data['order_id'], $data['created_payment_id'], $data['created_signature'])) {
            throw new \InvalidArgumentException('Invalid data structure');
        }

        // check transaction
        $result = LH::withEx("Saved Transaction in database...", "Error in saving transaction in database: ", function () use ($data) {
            return Transaction::create([...$data, "status" => "success"]);
        });
        return $result;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(array $data)
    {
        return $this->create($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Transaction::with('order')->findOrFail($id);
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
    public function update() {}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Transaction::destroy($id);
        return response()->noContent();
    }
}
