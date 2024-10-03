<?php

namespace App\Http\Controllers;

use App\Services\PaymentService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Resources\OrderController;
use App\Http\Controllers\Resources\TransactionController;

class PaymentController extends Controller
{
    private $paymentServices;
    private $orderDataBase;
    private $transactionDataBase;

    public function __construct()
    {
        $this->paymentServices = new PaymentService();
        $this->orderDataBase = new OrderController();
        $this->transactionDataBase = new TransactionController();
    }

    public function index(Request $request)
    {
        // $user = $request->user()->only(['name', 'email']);
        return view('pages.payments.payment');
    }

    public function success()
    {
        return view('pages.payments.success');
    }

    public function createOrder(Request $request)
    {
        $values = $request->validate([
            'amount' => 'required|numeric',
        ]);

        $amount = $values['amount'];

        // create order
        $result = $this->paymentServices->createOrder($amount);

        if ($result['status']) {
            $order = $result['data'];
            // save in database
            $return = $this->orderDataBase->create(Auth::id(), $order->id, $request->amount, 'success');
            // create session
            $this->createSession(['order_id' => $return['data']->id]);
            // return
            return response()->json(["id" => $order->id, "amount" => $order->amount, "currency" => $order->currency]);
        }
        return response()->json($result);
    }

    public function paymentCallback(Request $request)
    {
        // validation
        $data = $request->validate([
            'razorpay_order_id' => 'required',
            'razorpay_payment_id' => 'required',
            'razorpay_signature' => 'required',
        ]);

        //check transaction
        $this->paymentServices->verifyPaymentSignature($request->input('razorpay_order_id'), $request->input('razorpay_payment_id'), $request->input('razorpay_signature'));

        // save in database
        $this->transactionDataBase->create(["order_id" => $this->getSession('order_id'), "created_payment_id" => $data['razorpay_payment_id'], "created_signature" => $data['razorpay_signature']]);

        //destroy session order
        session()->forget('order_id');

        // redirect
        return redirect('/success');
    }

    public function createSession(array $data)
    {
        session($data);
    }

    public function getSession(string $key)
    {
        if (!session('order_id')) {
            throw new \InvalidArgumentException('Invalid session');
        }
        return session('order_id');
    }

    public function forgotSession()
    {
        if (!session('order_id')) {
            throw new \InvalidArgumentException('Invalid session');
        }
        session()->forget('order_id');
    }
}
