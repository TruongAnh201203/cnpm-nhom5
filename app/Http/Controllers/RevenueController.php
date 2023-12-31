<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Revenue;
use App\Models\Order;
use App\Models\User;
use Carbon\Carbon;

class RevenueController extends Controller
{
    public function index()
    {
        $time = Carbon::now()->month . Carbon::now()->year;
        $revenue = Revenue::where('month', $time)->first();
        $orderComplete = Order::where('status','Giao hàng thành công')->get();
        $order = Order::where('status','Đang xử lí')->get();
        $orderDelete = Order::where('status','Đã hủy')->get();
        $orderComfirm = Order::where('status','Đang giao')->get();
        $orders = Order::All();
        $users = User::where('role','1')->get();
        $revenue1 = Revenue::where('month', $time-10000)->first();
        $revenue2 = Revenue::where('month', $time-20000)->first();
        $revenue3 = Revenue::where('month', $time-30000)->first();
        $revenue4 = Revenue::where('month', $time-40000)->first();
        $data = [(int)( $revenue4->revenue),(int) ( $revenue3->revenue), (int) ( $revenue2->revenue),(int) ( $revenue1->revenue),
        (int) ( $revenue->revenue)];
        $categories = [(int)$revenue4->month,(int)$revenue3->month,(int)$revenue2->month,(int)$revenue1->month,(int)$revenue->month];
        $categories = json_encode($categories);
        return view('Admin.revenue', compact('orders', 'orderComplete', 'users', 'orderDelete',
        'orderComfirm', 'order', 'revenue', 'data', 'categories', 'revenue1'));
    }

    public function create()
    {
        return view('Admin.createRevenue');
    }

    public function store(Request $request)
    {
        $revenue = $request->only('month');
        $revenue['revenue'] = 0;
        $revenue['created_at'] = now();
        $revenue['updated_at'] = now();
        Revenue::create($revenue);
        return redirect()->route('admin.home');
    }
}
