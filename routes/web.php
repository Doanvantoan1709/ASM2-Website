<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Admin\AdminController;//nhung sao productcontroller lai dc nhi ao vai lz
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\OrderController;

// Route::get('/', function () {
//     return view('home.index');
// });

Route::get('/', [HomeController::class, 'index_header'])->name('home.index-header'); //
Route::get('/index', [HomeController::class, 'index'])->name('home.index'); //
Route::get('/shop-product', [HomeController::class, 'product'])->name('home.shop-product'); //
Route::get('/blog', [HomeController::class, 'blog'])->name('home.blog-list');//
Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');//


Route::group(['prefix' => 'account'], function() {

    Route::get('/login', [AccountController::class, 'login'])->name('account.login');
    Route::get('/logout', [AccountController::class, 'logout'])->name('account.logout');
    Route::get('/verify-account/{email}', [AccountController::class, 'verify'])->name('account.verify');
    Route::post('/login', [AccountController::class, 'check_login']);

    Route::get('/register', [AccountController::class, 'register'])->name('account.register');
    Route::post('/register', [AccountController::class, 'check_register']);

    Route::group(['middleware' => 'customer'], function() {
        Route::get('/profile', [AccountController::class, 'profile'])->name('account.profile');
        Route::post('/profile', [AccountController::class, 'check_profile']);

        Route::get('/change-pwd', [AccountController::class, 'change_password'])->name('account.change-pwd');
        Route::post('/change-pwd', [AccountController::class, 'check_change_password']);
    });

    Route::get('/forgot-password', [AccountController::class, 'forgot_password'])->name('account.forgot-pwd');
    Route::post('/forgot-password', [AccountController::class, 'check_forgot_password']);

    Route::get('/reset-password/{token}', [AccountController::class, 'reset_password'])->name('account.reset_password');
    Route::post('/reset-password/{token}', [AccountController::class, 'check_reset_password']);

});

Route::group(['prefix' => 'order','middleware' => 'customer'], function() {

    Route::get('/checkout', [CheckoutController::class, 'checkout'])->name('order.checkout');
    Route::post('/checkout', [CheckoutController::class, 'post_checkout']);
    Route::get('/verify/{token}', [CheckoutController::class, 'verify'])->name('order.verify');

});

Route::group(['prefix' => 'cart','middleware' => 'customer'], function() {
    
    Route::get('/', [CartController::class, 'index'])->name('cart.index');
    Route::get('/add/{product}', [CartController::class, 'add'])->name('cart.add');
    Route::get('/delete/{product}', [CartController::class, 'delete'])->name('cart.delete');
    Route::get('/update/{product}', [CartController::class, 'update'])->name('cart.update');
    Route::get('/clear', [CartController::class, 'clear'])->name('cart.clear');
});


Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'check_login']);

Route::group(['prefix' => 'admin','middleware'=>'auth'], function() { //phai auth thanh cong moi rout duoc 
  
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');
    Route::get('/order', [OrderController::class, 'index'])->name('admin.order.index');
    Route::get('/order/detail/{order}', [OrderController::class, 'show'])->name('order.show');
    Route::get('/order/update-status/{order}', [OrderController::class, 'update'])->name('order.update');
    Route::get('/timeline', [AdminController::class, 'timeline'])->name('admin.timeline');
    Route::get('/faq', [AdminController::class, 'faq'])->name('admin.faq');
    Route::get('/user-profile', [AdminController::class, 'user_profile'])->name('admin.user-profile');
    Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');
    

    Route::get('/order', [OrderController::class, 'index'])->name('order.index');
    Route::get('/order/detail/{order}', [OrderController::class, 'show'])->name('order.show');
    Route::get('/order/update-status/{order}', [OrderController::class, 'update'])->name('order.update');

   
    Route::resource('product', ProductController::class);
    Route::get('admin/product/{productId}/edit', [ProductController::class, 'edit'])->name('product.edit');

    Route::get('product-delete-image/{image}', [ProductController::class,'destroyImage'])->name('product.destroyImage');
});


