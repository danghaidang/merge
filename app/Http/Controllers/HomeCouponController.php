<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
//use App\Http\Requests\CouponRequest;
//use Illuminate\Http\Response;
use Illuminate\Pagination\Paginator;
use App\Store;
use App\Coupon;
//use DateTime;


//require_once app_path().'/libsimple/simple_html_dom.php';
class HomeCouponController extends CouponFunctionController
{
    public function getHome() {
        return view('home');
    }

    public function getDetail($store='') {
        return view('store_detail');
        //return response()->json($result)->header('Content-Type', 'application/json');

    }



}
