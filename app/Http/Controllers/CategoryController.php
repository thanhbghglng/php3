<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        //Eloquent
    // all: lay ra toan bo ban ghi 
    $categories = Category::all();

        //get lay ra toan bo ban ghi , ket hop dc cac dieu kien #
        //get se nam o cuoi cung cua doan try van 
        $categoriesGet = Category::select('id','name','description')->where('id','>',3)->get();
        return view('category.index',['categories'=>$categoriesGet]);
        dd('danh sach category',$categories,$categoriesGet);
    }
    public function add()
    {
        $categories = Category::all();
        // return ve view tao moi category
        return view ('category.add');
    }
}
