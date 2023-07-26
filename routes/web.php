<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AdminController,
    CourierController,
    HomeController,
    UserController,
};
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


Auth::routes(['verify' => true]);
Route::controller(HomeController::class)->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('/login', 'index')->name('login');
    Route::get('/register', 'index')->name('register');
    Route::get('/home', 'index')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/services', 'services')->name('services');
    Route::get('/logout', 'logout')->name('logout');
    Route::get('/tracking', 'tracking')->name('track');
    Route::get('/tracking/print/{code}', 'print_invoice')->name('print');
    Route::get('/terms', 'index')->name('terms');
    Route::get('/page/{slug}', 'pages')->name('page');
    Route::get('/contact', 'contact_us')->name('contact');
    Route::post('/contact', 'send_contact')->name('contact');


    Route::get('/admin/login', 'admin_login')->name('admin.login');
    Route::post('/admin/login', 'adminlogin')->name('admin.login');
});

// Admin Routes
Route::middleware('admin')->as('admin.')->prefix('admin')->group(function(){
    Route::controller(AdminController::class)->group(function(){
        Route::get('/', 'dashboard')->name('index');
        Route::get('/dashboard' , 'dashboard')->name('dashboard');
        Route::get('/profile' , 'profile')->name('profile');
        Route::post('/profile' , 'update_profile')->name('profile');
        Route::get('clear-cache', 'clear_cache')->name('clear-cache');
    });
    // Shipment
    Route::controller(CourierController::class)->as('shipment.')->prefix('shipments')->group(function(){
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/create', 'store')->name('create');
        Route::get('/edit/{code}', 'edit')->name('edit');
        Route::post('/edit/{code}', 'update')->name('edit');
        Route::get('/delete/{code}', 'delete')->name('delete');

        Route::get('history/{code}', 'history')->name('history');
        Route::post('history/{code}', 'store_history')->name('history');
        Route::get('history/{code}/del', 'delete_history')->name('history.delete');
        Route::post('history/{code}/update/{id}', 'update_history')->name('history.update');


        Route::get('/settings', 'setting')->name('settings');
    });

    // Settings
    Route::controller(AdminController::class)->as('setting.')->prefix('settings')->group(function(){
        Route::get('/payment' , 'payment_settings')->name('payment');
        Route::get('/features' , 'features')->name('features');
        Route::get('/email' , 'email_setting')->name('email');
        Route::get('/' , 'settings')->name('index');

        Route::post('/update', 'update_settings')->name('update');
        Route::post('/system', 'systemUpdate')->name('sys_settings');
        Route::post('/system/store', 'store_settings')->name('store_settings');
        Route::post('env_key', 'envkeyUpdate')->name('env_key');
    });
});
