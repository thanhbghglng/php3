<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
class NewsController extends Controller
{
    //
    public function index(){
        $news = News::all();
        $newsGet = News::select('id','title','content','category_id')
        ->withCount('newsProducts')
        ->with('newsProducts:id,name')
        ->with('categoryNews',function($query){
            $query->select('id','name');
        })
        ->paginate(5);
        
        // dd($products);
        // $newsGet->categoryNews;
        // dd($newsGet);
        // $newsProduct = News::select('id','title','content','category_id')->products();
        // dd($products->id->products());
        // dd($products);
        return view('news.index',['news'=>$newsGet]);
    }
    public function delete(News $id){
        if($id->delete()){
            return redirect()->route('news.index');
        }
    }
}
