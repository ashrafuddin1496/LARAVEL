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

Route::get('/', function () {
    return view('welcome');
});




//prefix route

Route::prefix('user')->group(function () {

Route::get('about-us',function(){
	echo "It's about us page";
});

Route::get('contact-us',function(){

	echo "It's Contact us page";

});

Route::get('dev/{name?}/{age?}',function($name='Ashraf', $age='30'){
	echo "My name is $name and age is $age";
});


});//end of the prefix route