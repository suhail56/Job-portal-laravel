<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registe;
use App\Http\Controllers\reg;
use App\Http\Controllers\post;
use App\Http\Controllers\aply;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('nav',function () {
    return view('navbar');
});
Route::get('job',function () {
    return view('home');
});
Route::get('findjob',function () {
    if(!session()->has('datas'))
    {
        return redirect('login');
    }
    return redirect('jobvi');
});
Route::get('postjob',function () {
    if(!session()->has('data'))
    {
        return redirect('plogin');
    }
    return view('postjob');
});
Route::get('about',function () {
    return view('about');
});
Route::get('contact',function () {
    return view('contact');
});
Route::get('login',function () {
    return view('login');
});
Route::get('plogin',function () {
    return view('plogin');
});
Route::get('register',function () {
    return view('register');
});
Route::get('pregister',function () {
    return view('pregister');
});
Route::resource('registe',registe::class);
Route::post('ins',[registe::class,'store']);
Route::post('log',[registe::class,'updat']);
Route::get('edp',[registe::class,'updates']);
Route::resource('reg',reg::class);
Route::post('iii',[reg::class,'store']);
Route::post('los',[reg::class,'update']);
Route::resource('post',post::class);
Route::post('poo',[post::class,'store']);

Route::get('/logout',function () {
    session()->forget('data');
    return view('plogin');
});
Route::get('/logouts',function () {
    session()->forget('datas');
    return view('login');
});

Route::get('jobvii',[post::class,'jobview']);
Route::get('jobvi',function () {
    if(!session()->has('datas'))
    {
        return redirect('login');
    }
    return redirect('jobvii');
});
Route::get('pop',[post::class,'postedview']);
Route::get('delete/{id}',[post::class,'destroy']);
Route::resource('aply',aply::class);
Route::get('apl/{id},{cid},{mail}',[aply::class,'store']);
Route::get('aplli/{id},{cid}',[aply::class,'show']);
Route::post('pooss',[post::class,'storess']);
