<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){

        return view ('FrontEnd.home');
    }
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function showDB()
    {
        $orders = DB::table('order')
            ->join('order_Detail', 'order.order_id', '=', 'order_Detail.order_id')
            ->join('product', 'order_Detail.product_id', '=', 'product.product_id')
            ->join('customer', 'order.customer_id', '=', 'customer.customer_id')
            ->select(
                'product.product_name AS product_name',
                'order_Detail.price AS price',
                'order_Detail.quantity AS quantity',
                DB::raw('order_Detail.price * order_Detail.quantity AS total_price'),
                'order_Detail.order_Detail_created AS order_Detail_created',
                DB::raw('CONCAT(customer.customer_firstName, " ", customer.customer_lastName) AS customer_name'),
                DB::raw('IF(`order`.order_updated IS NULL, "<td><span class=\"badge-dot badge-brand mr-1\"></span>On-process</td>", "<td><span class=\"badge-dot badge-success mr-1\"></span>Delivered</td>") AS order_status')
            )
            ->get();
    
        return view('FrontEnd.home', ['orders' => $orders]);
    }
    
}
