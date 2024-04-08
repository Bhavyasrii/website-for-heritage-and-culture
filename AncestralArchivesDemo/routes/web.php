<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::name('pages.')->group(function () {
    Route::get('/',[HomeController::class,'index'])->name('home');
    Route::get('/about', function () {
        return view('pages.about');
    })->name('about');
    Route::get('/home', [HomeController::class,'index'])->name('index');
    Route::get('/blog', function () {
        return view('pages.blog');
    })->name('blogs');
    Route::get('/blog-single', function () {
        return view('pages.blog-single');
    })->name('blog-post');
    Route::get('/causes', function () {
        return view('pages.causes');
    })->name('causes');
    Route::get('/help', function () {
        return view('pages.help');
    })->name('help');
    Route::get('/gallery', function () {
        return view('pages.gallery');
    })->name('gallery');
    Route::get('/event', function () {
        return view('pages.event');
    })->name('events');
    Route::get('/contact', function () {
        return view('pages.contact');
    })->name('contacts');
    Route::get('/user/dashboard', function () {
        return view('pages.user-pages.dashboard');
    })->name('dashboard');
    Route::get('/allShops',[ShopController::class,'allShops'])->name('shops');
    Route::prefix('/user')->name('user.')->group(function ()  {
        Route::get('/my-shops', [ShopController::class, 'showMyShops'])->name('my-shops');
        Route::get('/add-shops/form', [ShopController::class, 'addshop'])->name('add-shop');
        Route::post('/add-shops/save', [ShopController::class, 'storeShop'])->name('store-shop');
        Route::get('/edit-shop/{id}', [ShopController::class, 'editShop'])->name('edit-shop');
        Route::put('/update-shop/{id}', [ShopController::class, 'updateShop'])->name('update-shop');
        Route::get('/delete-shop/{id}', [ShopController::class, 'destroyShop'])->name('destroy-shop');
        Route::get('/edit-items/{id}', [ShopController::class, 'editItemShow'])->name('edit-items');
        Route::post('/add-item/{id}', [ShopController::class,'addItem'])->name('add-item');
        Route::get('/delete-item/{itemName}/{id}', [ShopController::class,'destroyItem'])->name('destroy-item');
        Route::get('/training', [ShopController::class,'AddTraining'])->name('add-training');
    });
    Route::prefix('/admin')->name('admin.')->group(function () {
        Route::get('/users', [AdminController::class,'index'])->name('users');
       Route::get('/shop/activity/{id}', [AdminController::class,'shopActivity'])->name('shop-activity');
       Route::get('/delete/shop/activity/{id}', [AdminController::class, 'destroyShopActivity'])->name('destroy-shop-activity');
       Route::get('/shop/approval/{status}/{id}',[AdminController::class,'shopApproval'])->name('shop-approval');
    });
});
//------------------------------------------------------------------------------------------------


//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__ . '/auth.php';
