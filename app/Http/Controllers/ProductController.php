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
    public function create()
    {
        //
        return view('product.create');
    }
    // luu ban ghi vao database
    public function store(Request $request)
    {
        $productRequest = request::all();
        $product = new Product();
        
    }
    // tra ve thong tin ban ghi theo id 
    public function show($id)
    {
        //
        
        $productDetail = Product::all()->where('id','=',$id);
        // dd($productDetail);
        return view('product.show',['productDetail'=>$productDetail]);
    }

    // cap nhat thong tin cua 1 ban ghi 
    public function update(Request $request ,$id)
    {
        //
    }
    // xoa 1 ban ghi product
    public function delete(Product $id)
    {
        //
        if($id->delete()){
            return redirect()->route('product.index');
        }

    }
}

