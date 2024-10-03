<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Resources\ClientController;

class FormController extends Controller
{
    private $clients;
    public function __construct()
    {
        $this->clients = new ClientController();
    }
    public function showForm()
    {
        return view('pages.application');
    }

    public function submitForm(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'state' => 'required',
            'message' => 'required'
        ]);

        $this->clients->create($request->name, $request->email, $request->phone, $request->state, $request->message);
        return redirect("/thank-you");
    }
}
