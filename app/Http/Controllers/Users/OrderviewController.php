<?php

namespace App\Http\Controllers\Users;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class OrderviewController extends Controller
{
    public function index() {
        $orders = Order::where('user_id', Auth::user()->id)->paginate(10);
        return view('dashboard.users.oders.liste', compact('orders'));
    }
}
