<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])
    ->name('home.index');

Route::get("/about", [HomeController::class, 'about'])
    ->name('home.about');

Route::get("/contact", [HomeController::class, 'contact'])
    ->name('home.contact');

Route::get('/store/{category?}/{item?}', function ($category = null, $item = null){

    if (  isset($category) )
    {
        $category = strip_tags($category);

        if ( isset($item) )
        {
            return "You are viewing the category " . $category . " Item: " . $item;
        }

        return 'you are iewing the store from ' . $category;
    }

    return "You Are viewing from all stores";

});

// Route::get('/store', function (){
//     $category = request('category');

//     if (  isset($category) )
//     {
//         $category = strip_tags($category);
//         return 'you are iewing the store from ' . $category;
//     }

//     return "You Are viewing from all categories";

// });