<?php



use Illuminate\Http\Request ;
use Illuminate\Http;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome'); // welcome.blade.php
});

// use Illuminate\Http\Request;

Route::get('/my-route', function(){
    // return view('myroute');
    //        Key    =>  Value

    return view('myfolder.mypage');
});



Route::post('/my-route', function(Request $request) {
    $data['myinput'] = $request->input('myinput');
    return view('myfolder.mypage',$data);
});
