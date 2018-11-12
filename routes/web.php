<?php

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

Route::get('/post/{id}', ['as' => 'post.detail', function ($id) {
    echo "post " .$id;
    echo "</br>";
    echo "ini adalah body post dengan id = ".$id;
}]);

//jika memasukkan url localhost:port/blog, maka akan menggunakan controller Post Controller
Route::get('/blog', 'PostController@index');

Route::get('/create', 'PostController2@create');


//mereturn View Langsung <-- Apakah ini best Practice?
// Route::get('/registerPage', ['as'=>'registerPage', function() {
//     return view('register');
// }]);

//post secara manual (tanpa menggunakan post Resource)
// Route::post('/post/store', 'PostController@storeData');

Route::resource('postcontroller2', 'PostController2');
Route::get('/lihatData', 'PostController2@index');
