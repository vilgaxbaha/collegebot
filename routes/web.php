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
    return view('start');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

/* Start Admin Slot**/
   Route::group(['prefix'=>'admin'],function(){
      Route::get('login','AdminLoginController@loginFrame')->name('admin.login');
      Route::post('login','AdminLoginController@login');
      Route::get('addQuestion','AddQuestionController@addQuestionFrame')->name('admin.addQuestion');
      Route::post('addQuestion','AddQuestionController@addQuestion');
      Route::get('viewInvalidQuestion','InvalidQuestionController@viewAllInvalidQuestion')->name('admin.viewInvalidQuestion');
      Route::get('viewQuestion','ViewQuestionController@viewQuestion')->name('admin.viewQuestion');
      Route::post('addQuestion','AddQuestionController@addQuestion')->name('admin.addQuestion');
      Route::post('addUpdateQuestion','InvalidQuestionController@addUpdateQuestion')->name('admin.addUpdateQuestion');
      Route::post('deleteQuestion','InvalidQuestionController@deleteQuestion')->name('admin.deleteQuestion');
      Route::post('deleteQuestion','InvalidQuestionController@deleteQuestion')->name('admin.deleteQuestion');
      Route::get('logout','AdminLoginController@logout')->name('admin.logout');
   });
/* End Admin Slot**/

/* Start User Slot**/
   Route::group(['prefix'=>'user'], function(){
      Route::get('login','Auth\LoginController@userLogin')->name('user.login');
      Route::post('back','ViewQuestionController@userBack')->name('user.back');
      Route::post('viewAns','ViewQuestionController@answer')->name('user.viewAns');
      Route::post('invalidQuestion','InvalidQuestionController@invalidQuestionView')->name('user.invalidQuestion');
   	Route::post('addInvalidQuestion','InvalidQuestionController@addInvalidQuestionView')->name('user.addInvalidQuestion');
   });
/* End User Slot**/
