<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GuitarsController;
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
//index, about, and contact pages using the home controller
Route::get('/', [HomeController::class, 'index']); 
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);

// creating guitars routes using a resource.
// resource creates all the routes starting with /guitars
Route::resource ('guitars', GuitarsController::class);


//Routing style using parameters
Route::get('/store/{category?}/{item?}', function($category=null, $item=null){

    if (isset($category)){

        if(isset($item)){
            return "you are viewing store for {$category} for {$item}";
        }
        return "you are viewing store for {$category}";
    }
    return "you are viewing all the items";
});