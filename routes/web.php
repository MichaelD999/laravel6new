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
Route::view('/', 'welcome');

Route::get('payments/create', 'PaymentsController@create')->middleware('auth');
Route::post('payments', 'PaymentsController@store')->middleware('auth');
Route::get('notifications', 'UserNotificationController@show')->middleware('auth');

Route::get('conversations', 'ConversationsController@index');
Route::get('conversations/{conversation}', 'ConversationsController@show');

Route::post('best-replies/{reply}', 'ConversationBestReplyController@store');

Auth::routes();


//Route::get('/contact', 'ContactController@show');
//
//Route::post('/contact', 'ContactController@store');

//app()->bind('App\Example', function () {
//    $collaborator = new \App\Collaborator();
//    $foo = 'foobar';
//
//    return new \App\Example($collaborator, $foo);
//});
//
//
//Route::get('/', 'PagesController@home');

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/', function () {
//   $container = new \App\Container();
//
//   $container->bind('example', function (){
//      return new \App\Example();
//   });
//
//   $example = $container->resolve('example');
//
//   $example->go();
//});
//
//Auth::routes();
//
//Route::get('/home', 'HomeController@index')
//    ->name('home')
//    ->middleware('auth');
