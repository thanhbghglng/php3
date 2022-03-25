<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// thu muc resources/view/welcome.blade.php
// Route::get('/', function () {
//     $students =[
//         [
//             "name"=>"Đinh Công Thành",
//             "age"=>"30",
//             "class"=>"23123",
//             "id"=>"2"
//         ],  [
//             "name"=>"Đinh Công Thành",
//             "age"=>"30",
//             "class"=>"23123",
//             "id"=>"2"
//         ],  [
//             "name"=>"Đinh Công Thành",
//             "age"=>"30",
//             "class"=>"23123",
//             "id"=>"2"
//         ],
//         [
//             "name"=>"Đinh Công Thành",
//             "age"=>"30",
//             "class"=>"23123",
//             "id"=>"2"
//         ]
        
        
//     ];
//     return view('welcome',['students'=>$students]);
// });
// thu muc resources/view/auth/login.blade.php => auth.login

Route::get('/login',function(){
    // dd('login view');
    return view('auth.login')->with('email','123');
});

Route::get('/register',function(){
    // dd('login view');
    return view('auth.register');
});
Route::get('/user/{userId?} ', function (Request $request ,$userId="1" ) {
    $data= $request->all();
    $user = [
        [
        "name"=>'thanhdcph10271',
        "height"=>"168",
        "weight"=>"55",
        "age"=>"20",
        "gender"=>"male",
        "avatar"=>""
        ]
    ];
    // dd($data);
    return view ('lab1',['userId'=>$userId , 'data'=>$data, 'user'=>$user]);
});

Route::get('/', function () {
    $students =[
        [
            "name"=>"Đinh Công Thành",
            "age"=>"22",
            "class"=>"WE16201",
            "id"=>"PH10271"
        ],  [
            "name"=>"Hoàng Văn B",
            "age"=>"25",
            "class"=>"WE16021",
            "id"=>"PH22115"
        ],  [
            "name"=>"Nguyễn Văn A",
            "age"=>"30",
            "class"=>"WE16021",
            "id"=>"PH15225"
        ],
        [
            "name"=>"Trần Thị C",
            "age"=>"28",
            "class"=>"WE16001",
            "id"=>"PH55312"
        ]
        
        
    ];
    return view('home',['students'=>$students]);
})->name('home');
// Route::get('/categories',[CategoryController::class,'index'])->name('categories');
// prefix : duong dan chung cau group, noi ->/categories/create
// name: name chung cau group, noi cac name con :categories.index
Route::prefix('/categories')->name('categories.')->group(function(){
    // danh sach
    Route::get('/',[CategoryController::class,'index'])->name('index');
    // tao moi 
    Route::get('/create',[CategoryController::class,'create'])->name('create');
    Route::post('/store',[CategoryController::class,'store'])->name('store');
    // chinh sua 
    Route::get('/edit/{id}',[CategoryController::class,'edit'])->name('edit');
    Route::put('/update/{id}',[CategoryController::class,'update'])->name('update');
    // xoa
    Route::delete('/{id}',[CategoryController::class,'delete'] )->name('delete');
        

});



Route::prefix('/product')->name('product.')->group(function(){
    Route::get('/',[ProductController::class,'index'])->name('index');
    Route::get('/create',[ProductController::class,'create'])->name('create');
    Route::post('/store',[ProductController::class,'store'])->name('store');
    Route::get('/show/{id?}',[ProductController::class,'show'])->name('show');
    Route::delete('/{id}',[ProductController::class,'delete'])->name('delete');
});