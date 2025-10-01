<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    public function index()
    {
        try {
            $response = Http::get('https://fakestoreapi.com/products');
            $products = $response->successful() ? $response->json() : [];
        } catch (\Exception $e) {
            $products = [];
        }

        return view('products.index', compact('products'));
    }
}
