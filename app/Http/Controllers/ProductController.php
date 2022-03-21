<?php

namespace App\Http\Controllers;
use App\Models\Allproduct;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProducts(){

        $allproducts =   Allproduct::all();
        return view('admin/products/productindex',['allproducts' => $allproducts]);
        // return view('detail');
    }
}
