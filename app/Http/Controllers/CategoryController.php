<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;
class CategoryController extends Controller
{
    public function index()
    {
        //Eloquent
    // all: lay ra toan bo ban ghi 
        $categories = Category::all();

        //get lay ra toan bo ban ghi , ket hop dc cac dieu kien #
        //get se nam o cuoi cung cua doan try van 
        $categoriesGet = Category::select('id','name','description','slug','created_at','updated_at')
        // ->where('id','>',3)
        // ->get();
        ->orderBy('id','DESC')
        ->paginate(5);
        return view('category.index',['categories'=>$categoriesGet]);
        // dd('danh sach category',$categories,$categoriesGet);
    }
    public function create()
    {
        // return ve view tao moi category
        return view ('category.create');
    }
    public function store(Request $request)
    {
        $categoryRequest = $request->all();
        $category = new Category();
        $category->name=$categoryRequest['name'];
        $category->description=$categoryRequest['description'];
        $category->status=$categoryRequest['status'];
        $category->slug=Str::slug($categoryRequest['name']);
        $category->save();
        return redirect()->route('categories.index');
    }

    public function edit(Category $id)
    {
        $categoryEdit = $id;
        // dd($categoryEdit);
        return view('category.edit',['categoryEdit'=>$categoryEdit]);

    }


    public function update(Request $request,$id)
    {
        $categoryRequest = $request->all();
        $category = Category::find($id);
        $category->name=$categoryRequest['name'];
        $category->description=$categoryRequest['description'];
        $category->status=$categoryRequest['status'];
        $category->slug=Str::slug($categoryRequest['name']);
        // dd($category);
        $category->save();
        
        return redirect()->route('categories.index');

      
    }







    public function delete(Category $id){
        //neu muon su dung model binding
        //1. dinh nghia kieu tham so truyen vao la model tuong ung
        // 2. tham so o route === ten than so truyen vao ham 
        if($id->delete()){
            return redirect()->route('categories.index');
        }
        dd($id);
        // cach 1, destroy,tra ve id cua thang duoc xoa 
        // chi ap dung khi  tham so nhan vao la gia tri
        // $categoryDestroy = Category::destroy($id);
        // if($categoryDestroy !==0){
        //     return redirect()->route('categories.index');
        // }
        // dd($categoryDestroy);
        //Cach 2:delete, tra ve true hoac false
        // $category = Category::find($id);
        // $category->delete();
    }
}
