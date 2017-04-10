<?php


/*
--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'admin', 'middleware' => 'Ip'], function () {
	/*$route = Route::get('salut/{slug}-{id}', ['as'=>'salut',function ($slug, $id) {
		return "Lien : " . route('salut', [ 'slug' => $slug, 'id' => $id]);
	}])->where('slug', '[a-z0-9\-]+')->where('id', '[0-9]+');
    */
    Route::get('salut', function(){
	    return 'Salut Anas';
    });
});

//dd($route);

Route::get('/', function () {
	return view('welcome');
}
);

Auth::routes();

Route::get('/salut/{name}', 'HomeController@index');
