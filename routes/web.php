<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Congig;

use App\Http\Livewire\Admin\CeproInfos;


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

//Clients routes
Route::get('/', function () {
    return view('pages.client.home');
})->name('client');

Route::get('/pages/{page}/{el}', function($page, $el){
    return view('pages.client.pages', ['page'=>$page, 'el'=>$el]);
})->name('pages');




//Admin routes
/* Route::middleware(['admin.token'])->group(function () {
    
    //Route::get('/admin/info', CeproInfos::class)->name('infos');
}); */
Route::middleware(['auth:sanctum', 'verified'])->get('/admin', function(){
    //if($token === '333') 
    //else return view('404.errorToken');
    return view('pages.admin.home', ['nav'=> Config::get('admin.nav')]);
})->name('admin');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    //return view('dashboard');
    return view('pages.admin.home', ['nav'=> Config::get('admin.nav')]);
})->name('dashboard');
