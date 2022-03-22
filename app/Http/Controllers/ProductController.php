<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    //tra ve danh sach ban ghi product
    public function index()
    {
        $products = Product::all();
        return view('product.index',['products'=>$products]);
    }
    //tao ban ghi product moi Requet $request
    public function store()
    {
        //
        return view('product.store');
    }

    // tra ve thong tin ban ghi theo id 
    public function show($id)
    {
        //
    }

    // cap nhat thong tin cua 1 ban ghi 
    public function update(Request $request ,$id)
    {
        //
    }
    // xoa 1 ban ghi product
    public function destroy($id)
    {
        //
    }
}

