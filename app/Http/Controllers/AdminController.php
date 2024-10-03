<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Resources\ClientController;

class AdminController extends Controller
{
    private $clients;
    public function __construct()
    {
        $this->clients = new ClientController();
    }

    public function index(Request $request)
    {
        return view("admin.admin", ["clients" => $this->clients->index()]);
    }

    public function login(Request $request)
    {
        if ($request->email == "admin@admin.com" && $request->password == "Khurshid@1997") {
            $request->session()->put("admin", true);
            return redirect("/admin");
        }
        return redirect()->route("admin.login.page", ["error" => "Invalid credentials"]);
    }

    public function loginPage(Request $request)
    {
        $error = $request->query("error");
        return view("admin.login", ["error" => $error]);
    }
}
