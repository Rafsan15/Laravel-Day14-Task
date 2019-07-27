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
    Route::get('/user/home','UserController@Home')->name('user.home');
    Route::get('/user/register','UserController@UserRegisterForm')->name('user.registerForm');
    Route::post('/user/register','UserController@UserRegisterData')->name('user.registerData');
    Route::get('/user/login','LogInController@UserLoginForm')->name('user.loginForm');
    Route::post('/user/login','LogInController@UserLoginData')->name('user.loginData');
    Route::get('/user/dashboard','UserController@DashBoard')->name('user.dashBoard');
    Route::get('/user/about','UserController@AboutUs')->name('user.about');
    Route::get('/user/contactUs','UserController@ContactUs')->name('user.contactUs');
    Route::get('/user/{id}/edit','UserController@UserEditForm')->name('user.editForm');
    Route::post('/user/edit','UserController@UserEditData')->name('user.editData');
    Route::get('/user/{id}/delete','UserController@DeleteRow')->name('user.deleteRow');
    Route::post('/user/search','UserController@FindSingleUser')->name('user.searchRow');
