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

Auth::routes( [


    'confirm' => false,
    'verify' => false,
]);

Route::get('/edit', 'ProfileController@getEdition')->middleware('auth')->name('edit');

Route::post('/edit', 'ProfileController@postEdition')->middleware('auth')->name('edit');

Route::get('/home', 'ProfileController@profile')->name('home');

Route::get('spisok', 'ProfileController@spisok')->middleware('auth')->name('spisok');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/', 'MainController@index')->name('main');

Route::get('about', 'MainController@about');

Route::get('support', 'MainController@support')->middleware('auth');

Route::post('support/create', 'MainController@insert');

Route::get('catalog', 'CatalogController@index');

Route::get('/add', [\App\Http\Controllers\CartController::class, 'addCart'])->name('add');

Route::get('/cart', 'CartController@actionIndex')->name('cart');

Route::get('delete','CartController@deleteCart')->name('delete');

Route::get('order', 'OrderController@order')->name('order')->middleware('auth');

Route::post('order/create','OrderController@orderCreate')->name('order/create')->middleware('auth');

Route::get('/catalog/{cat_id}', 'CatalogController@show')->where('id', '[1-9]+')->name('showProductCat');

Route::get('/game/{id}', 'MainController@show')->where('id', '[0-9]+')->name('showProduct');


Route::get('/fgkgfl', function () {
    return 'About page';

});




