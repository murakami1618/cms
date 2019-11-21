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
use App\Book;
use Illuminate\Http\Request; 

/**
* 本のダッシュボード表示 */
Route::get('/', 'BookController@index');

/**
* 新「本」を追加 */
Route::post('/books', 'BookController@store');

//更新画面
Route::post('/booksedit/{books}', 'BookController@edit');

//更新処理
Route::post('/books/update', 'BookController@update');

/**
* 本を削除 */
Route::delete('/book/{book}', 'BookController@destroy');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
?>

