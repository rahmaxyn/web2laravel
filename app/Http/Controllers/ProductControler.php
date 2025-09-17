<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class ProductControler extends Controller
{
    public function index()
    {
        $products = product::all();
        return view ('product.index', compact("products"));
    }
}
