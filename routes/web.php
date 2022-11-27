<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
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
})->name('welcome');
Route::get('/cloud', function () {
    return view('cloud');
})->name('cloud');
Route::get('/cybersecurity', function () {
    return view('cybersecurity');
})->name('cyber');
Route::get('/projectmanagement', function () {
    return view('projectmanagement');
})->name('project');
Route::get('/seo', function () {
    return view('seo');
})->name('seo');
Route::get('/webdevelopment', function () {
    return view('webdevelopment');
})->name('webdev');
Route::get('/appdevelopment', function () {
    return view('appdevelopment');
})->name('appdev');
Route::get('/webdesign', function () {
    return view('webdesign');
})->name('webdesign');
Route::get('/contactus', function () {
    return view('contactus');
})->name('contactus');
Route::get('/products', function () {
    return view('products');
})->name('products');
Route::get('/clients', function () {
    return view('clients');
})->name('clients');
Route::get('/government', function () {
    return view('government');
})->name('government');
Route::get('/blogs', function () {
    return view('blogs');
})->name('blogs');
Route::get('/blog', function () {
    return view('blog');
})->name('blog');
Route::post('/touchus', [ContactController::class, 'touch'])->name('contact.send');
