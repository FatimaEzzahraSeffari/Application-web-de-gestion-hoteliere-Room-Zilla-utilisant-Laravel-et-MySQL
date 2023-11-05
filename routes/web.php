<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    $viewData = [];
    $viewData["title"] = "Home Page - Online Store";
    return view('home.index')->with("viewData", $viewData);
    });
    //about 
    Route::get('/about', function () {
        $viewData = [];
        $viewData["title"] = "Home Page - Online Store";
        return view('about')->with("viewData", $viewData);
        });
    
    Route::group(['middleware'=>'guest'],function(){
        Route::get('login',[AuthController::class,'index'])->name('login');
        Route::post('login',[AuthController::class,'login'])->name('login')->middleware('throttle:2,1');
    
        Route::get('register',[AuthController::class,'register_view'])->name('register');
        Route::post('register',[AuthController::class,'register'])->name('register')->middleware('throttle:2,1');
    });
    
   
    
    
    Route::group(['middleware'=>'auth'],function(){
        // Route::get('home',[AuthController::class,'home'])->name('home');
        // Route::get('home2',[AuthController::class,'home2'])->name('home2');
        Route::get('logout',[AuthController::class,'logout'])->name('logout');
    });
    Route::get('/admin/users','App\Http\Controllers\Admin\AdminUserController@index')->name("admin.user.index");
    Route::delete('/admin/users/{id}/delete','App\Http\Controllers\Admin\AdminUserController@delete')->name("admin.user.delete");
Route::get('/admin/users/{id}/edit', 'App\Http\Controllers\Admin\AdminUserController@edit')->name("admin.user.edit");
Route::put('/admin/users/{id}/update', 'App\Http\Controllers\Admin\AdminUserController@update')->name("admin.user.update");
//admin
    Route::get('/admin', 'App\Http\Controllers\Admin\AdminHomeController@index')->name("admin.index");
//rooms
Route::get('/rooms', 'App\Http\Controllers\RoomController@index')->name("room.index");
Route::get('/rooms/{id}', 'App\Http\Controllers\RoomController@show')->name("room.show");
Route::get('/admin/rooms','App\Http\Controllers\Admin\AdminRoomController@index')->name("admin.room.index");
Route::post('/admin/rooms/store', 'App\Http\Controllers\Admin\AdminRoomController@store')->name("admin.room.store");
Route::delete('/admin/rooms/{id}/delete','App\Http\Controllers\Admin\AdminRoomController@delete')->name("admin.room.delete");
Route::get('/admin/rooms/{id}/edit', 'App\Http\Controllers\Admin\AdminRoomController@edit')->name("admin.room.edit");
Route::put('/admin/rooms/{id}/update', 'App\Http\Controllers\Admin\AdminRoomController@update')->name("admin.room.update");
//services 
Route::get('/services', 'App\Http\Controllers\ServiceController@index')->name("service.index");
Route::get('/services/{id}', 'App\Http\Controllers\ServiceController@show')->name("service.show");
Route::get('/admin/services','App\Http\Controllers\Admin\AdminServiceController@index')->name("admin.service.index");
Route::post('/admin/services/store', 'App\Http\Controllers\Admin\AdminServiceController@store')->name("admin.service.store");
Route::delete('/admin/services/{id}/delete','App\Http\Controllers\Admin\AdminServiceController@delete')->name("admin.service.delete");
Route::get('/admin/services/{id}/edit', 'App\Http\Controllers\Admin\AdminServiceController@edit')->name("admin.service.edit");
Route::put('/admin/services/{id}/update', 'App\Http\Controllers\Admin\AdminServiceController@update')->name("admin.service.update");
// team
Route::get('/teams', 'App\Http\Controllers\TeamController@index')->name("team.index");
Route::get('/teams/{id}', 'App\Http\Controllers\TeamController@show')->name("team.show");
Route::get('/admin/teams','App\Http\Controllers\Admin\AdminTeamController@index')->name("admin.team.index");
Route::post('/admin/teams/store', 'App\Http\Controllers\Admin\AdminTeamController@store')->name("admin.team.store");
Route::delete('/admin/teams/{id}/delete','App\Http\Controllers\Admin\AdminTeamController@delete')->name("admin.team.delete");
Route::get('/admin/teams/{id}/edit', 'App\Http\Controllers\Admin\AdminTeamController@edit')->name("admin.team.edit");
Route::put('/admin/teams/{id}/update', 'App\Http\Controllers\Admin\AdminTeamController@update')->name("admin.team.update");
//comment 
Route::get('/comments', 'App\Http\Controllers\CommentController@index1')->name("comment.index");
Route::get('/', 'App\Http\Controllers\CommentController@index2')->name("home.index");
Route::post('/comments/store', 'App\Http\Controllers\CommentController@store')->name("comment.store");
Route::get('/admin/comments','App\Http\Controllers\Admin\AdminCommentController@index')->name("admin.comment.index");
Route::delete('/admin/comments/{id}/delete','App\Http\Controllers\Admin\AdminCommentController@delete')->name("admin.comment.delete");
Route::get('/admin/comments/{id}/edit', 'App\Http\Controllers\Admin\AdminCommentController@edit')->name("admin.comment.edit");
Route::put('/admin/comments/{id}/update', 'App\Http\Controllers\Admin\AdminCommentController@update')->name("admin.comment.update");
//booking 
Route::get('/bookings', 'App\Http\Controllers\BookingController@index')->name("booking.index");
Route::post('/bookings/store', 'App\Http\Controllers\BookingController@store')->name("booking.store");
Route::get('/admin/bookings','App\Http\Controllers\Admin\AdminBookingController@index')->name("admin.booking.index");
Route::delete('/admin/bookings/{id}/delete','App\Http\Controllers\Admin\AdminBookingController@delete')->name("admin.booking.delete");
Route::get('/admin/bookings/{id}/edit', 'App\Http\Controllers\Admin\AdminBookingController@edit')->name("admin.booking.edit");
Route::put('/admin/bookings/{id}/update', 'App\Http\Controllers\Admin\AdminBookingController@update')->name("admin.booking.update");
//contact 
Route::get('/contacts', 'App\Http\Controllers\ContactController@index')->name("contact.index");
Route::post('/contacts/store', 'App\Http\Controllers\ContactController@store')->name("contact.store");
Route::get('/admin/contacts','App\Http\Controllers\Admin\AdminContactController@index')->name("admin.contact.index");
Route::delete('/admin/contacts/{id}/delete','App\Http\Controllers\Admin\AdminContactController@delete')->name("admin.contact.delete");
Route::get('/admin/contacts/{id}/edit', 'App\Http\Controllers\Admin\AdminContactController@edit')->name("admin.contact.edit");
Route::put('/admin/conctats/{id}/update', 'App\Http\Controllers\Admin\AdminContactController@update')->name("admin.contact.update");