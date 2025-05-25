<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard');
    }

    public function adminDashboard()
    {
        return view('admin.dashboard');
    }

    public function productManagerDashboard()
    {
        return view('product-manager.dashboard');
    }

    public function orderManagerDashboard()
    {
        return view('order-manager.dashboard');
    }

    public function customerDashboard()
    {
        return view('customer.dashboard');
    }
}
