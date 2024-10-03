<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;
use Razorpay\Api\Api;
use App\Helper\LogHelper as LH;

class PaymentService
{
    private $id;
    private $secret;
    private $api;

    public function __construct()
    {
        $this->id = config('services.razorpay.key');
        $this->secret = config('services.razorpay.secret');
        $this->api = new Api($this->id, $this->secret);
    }

    public function createOrder(string $amount)
    {
        $orderData = [
            'amount' => $amount * 100, // Amount in paise (e.g., 50000 = ₹500)
            'currency' => 'INR',
            'receipt' => 'receipt#1',
            'payment_capture' => 1 // Auto capture
        ];

        $result = LH::withEx(
            "Order created...",
            "Error in creating order: ",
            function () use ($orderData) {
                return $this->api->order->create($orderData);
            }
        );

        return $result;
    }

    public function verifyPaymentSignature(string $razorpay_order_id, string $razorpay_payment_id, string $razorpay_signature)
    {
        $attributes = [
            'razorpay_order_id' => $razorpay_order_id,
            'razorpay_payment_id' => $razorpay_payment_id,
            'razorpay_signature' => $razorpay_signature
        ];

        $result = LH::withEx("Verified Payment Successfully...", "Error in Verifying Payment Signature: ", function () use ($attributes) {
            $this->api->utility->verifyPaymentSignature($attributes);
        });

        return $result;
    }
}
