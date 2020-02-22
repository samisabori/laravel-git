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
    return view('site.index');
});
Auth::routes(['verify' => true]);//برای ارسال ایمیل فعالسازی لاراول این بخش مورد نیاز است//
Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/user', function () {
//    $user=Auth::user();//اگر بخواهید user ای که در سایتتان auth کرده باشه و بخواین اطلاعات اش رو ذخیره داشته باشی. در واقع اون کاربری که احراز هویت کرده رو برمیگردونه
//    if (Auth::check()/*if user Autothication کرده بود*/){
//        echo "username is : " .$user->name;
//        echo "<hr>";
//        echo "user ID is : " .$user->id;
//    }else{
//        echo "ثبت نام نکرده";
//    }
//});
//***********************************_admin*******************************************
Route::middleware('admin')->namespace('Admin')->prefix(config('site.admin'))->group(function (){
    Route::get('admin/role', 'UserRoleController@index');
    Route::get('admin', 'UserRoleController@show');

});
Route::group(['middleware'=>'admin'],function (){
    Route::resource('admin/users','Admin\AdminUserController');

});

//Route::get('/admin' ,function (){
//    return view('admin.users.index');
//});

