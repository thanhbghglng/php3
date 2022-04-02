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
        ->withCount('productsnn')
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

        // validate
        $request->validate([
            'name' => 'required',
            'description'=>'required'
            
        ]);
        // neu co loi trong dieu kien truyen vao se tu dong ket thuc ham va quay tro lai form kem bien error
        $categoryRequest = $request->all();
        $category = new Category();
        $category->name=$categoryRequest['name'];
        $category->description=$categoryRequest['description'];
        $category->status=$categoryRequest['status'];
        $category->slug=Str::slug($categoryRequest['name']);
        // dd($category);
        $category->save();
        return redirect()->route('categories.index');
    }

    public function edit(Category $id)
    {
        $products = $id->productsnn()->select('name')->paginate(5) ;
        // dd($categoryEdit);
        // dd($id->productsnn()->select('name')->get());
        // dd($categoryEdit);
        return view('category.create',['category'=>$id,'products'=>$products]);

    }


    public function update(Request $request, Category $id)
    {
        $category = $id;
        $category->name=$request->name;
        $category->description=$request->description;
        $category->status=$request->status;
        $category->slug=Str::slug($request->name). '-'.uniqid();
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
