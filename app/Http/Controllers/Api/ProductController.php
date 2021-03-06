<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;

class ProductController extends Controller
{
    
    
    public function index()
    {
        
        return ProductResource::collection(Product::all());
        
    }
    
    public function show(Product $product)
    {
        return new ProductResource($product);
    }
}
