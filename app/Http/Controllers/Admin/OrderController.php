<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
class OrderController extends Controller
{
    public function Index()
    {
        $order  = Order::get();
        return view('admin.order.index',compact('order'));
    }
}
