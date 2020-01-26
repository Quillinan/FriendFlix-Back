<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('listaUsers', 'UserController@listaUsers');
Route::get('mostraUser/{id}', 'UserController@showUser');
Route::post('criaUser', 'UserController@createUser');
Route::put('atualizaUser/{id}', 'UserController@updateUser' );
Route::delete('deletaUser/{id}', 'UserController@deleteUser');


Route::get('listaSeries', 'SerieController@listSeries');
Route::get('mostraSerie/{id}', 'SerieController@showSerie');
Route::post('criaSerie', 'SerieController@createSerie');
Route::put('atualizaSerie/{id}', 'SerieController@updateSerie');
Route::delete('deletaSerie/{id}', 'SerieController@deleteSerie');


Route::get('listaComments', 'CommentController@listComments');
Route::get('mostraComment/{id}', 'CommentController@showComment');
Route::post('criaComment', 'CommentController@createComment');
Route::put('atualizaComment/{id}', 'CommentController@updateComment');
Route::delete('deletaComment/{id}', 'CommentController@deleteComment');
//
