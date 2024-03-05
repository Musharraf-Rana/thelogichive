<?php

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

//********************************************************* Start Front Route *********************************************************// 
$PhoneNumber = '+1 (515) 377-0530';
Route::get('/', function ()  use($PhoneNumber){
    $data['phoneNumber'] = $PhoneNumber;    
    return view('front.home')->with($data);
})->name('home');

Route::get('/about-us', function () use($PhoneNumber){
    $data['phoneNumber'] = $PhoneNumber;    
    return view('front.about')->with($data);
})->name('about');

Route::get('/Get-a-Free-Quote', function () use($PhoneNumber) {
    $data['phoneNumber'] = $PhoneNumber;    
    return view('front.get-a-free-quote')->with($data);
})->name('Get-a-Free-Quote');

Route::get('/book-a-call', function ()  use($PhoneNumber){
    $data['phoneNumber'] = $PhoneNumber;    
    return view('front.book-a-call')->with($data);
})->name('book-a-call');

Route::get('/testimonial', function ()  use($PhoneNumber){
    $data['phoneNumber'] = $PhoneNumber;    
    return view('front.testimonial')->with($data);
})->name('testimonial');

Route::get('/showcase', function ()  use($PhoneNumber){
    $data['phoneNumber'] = $PhoneNumber;    
    return view('front.showcase')->with($data);
})->name('showcase');

Route::get('/contact', function ()  use($PhoneNumber){
    $data['phoneNumber'] = $PhoneNumber;    
    return view('front.contact')->with($data);
})->name('contact');

Route::get('/custom-packages', function ()  use($PhoneNumber){
    $data['phoneNumber'] = $PhoneNumber;    
    return view('front.custom-packages')->with($data);
})->name('custom-packages');

Route::get('/logo-packages', function () use($PhoneNumber){
    $data['phoneNumber'] = $PhoneNumber;    
    return view('front.packages.logo-packages')->with($data);
})->name('logo-packages');















//********************************************************* End Front Route *********************************************************// 
