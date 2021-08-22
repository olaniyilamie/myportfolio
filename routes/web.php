<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'Myweb@loadpage')->name('myweb');
// Route::get('/', function(){
//     return view('wedfri');
// });
// Route::post('/',function(){
//     $data = Request(['name','email','number','subject','detail']);
//     \Illuminate\Support\Facades\Mail::to('olaniyilamie@gmail.com')->send(new \App\Mail\SendToMail($data));
//     return redirect('/')->with('flash','Thank you for contacting me, I will reach back to you shortly');
    
// });
Route::post('/needwebsubmit','Myweb@needweb')->name('needweb');
Route::post('/hiresubmit','Myweb@hire')->name('hire');
Route::post('/messagesubmit','Myweb@message')->name('message');

Route::get('/unknown','Myweb@personal')->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
