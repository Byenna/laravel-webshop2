<?php

namespace App\Http\Controllers\Api;

use App\Models\ProductCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    public function index(){
        return  ProductCategory::all();
    }
}
