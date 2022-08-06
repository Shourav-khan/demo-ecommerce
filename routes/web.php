<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\productController;
use App\Http\Controllers\Admin\shippingAreaController;
use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\DeliveryShowController;
use App\Http\Controllers\fontendController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\shippingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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


/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/','fontendController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/home', 'AdminController@index');
Route::get('admin','Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin','Admin\LoginController@Login');
Route::get('admin/logout','AdminController@logout')->name('admin.logout');

Route::get('delivery/all/home',[DeliveryController::class,'indexing']);
Route::get('delivery','Delivery\LoginController@showLoginForm')->name('login.delivery');
Route::post('delivery','Delivery\LoginController@login');

Route::get('admin/categories','Admin\CategoryController@index')->name('admin.category');
Route::post('admin/catagories/add','Admin\CategoryController@storing')->name('store.category');
Route::get('/admin/category/edit/{id}/',[CategoryController::class,'edit']);
Route::post('admin/catagories/update','Admin\CategoryController@update')->name('update.category');
Route::get('/admin/category/delete/{id}/',[CategoryController::class,'delete']);


Route::get('admin/products/add','Admin\productController@addingProduct')->name('add-product');
Route::post('admin/product/store','Admin\productController@storeProduct')->name('store-products');
Route::get('admin/product/manage','Admin\productController@manageProduct')->name('manage-products');
Route::get('/admin/product/edit/{product_id}/',[productController::class,'editProduct']);
Route::post('admin/product/update',[productController::class,'updateProduct']);
Route::get('/admin/product/delete/{id}/',[productController::class,'deletePro']);



Route::post('/add/to-cart/{product_id}/',[CartController::class,'addToCart']);
Route::get('cart',[CartController::class,'cartPage']);
Route::get('/cart/destroy/{cart_id}/',[CartController::class,'destroy']);
Route::post('/cart/quantiy/update/{cart_id}/',[CartController::class,'quantityUpdate']);


Route::get('checkout',[CheckoutController::class,'index'])->name('check');


Route::post('place/order',[OrderController::class,'storeOrder']);
Route::get('order/success',[OrderController::class,'orderSuccess']);


Route::get('user/order',[UserController::class,'order'])->name('user.order');
Route::get('/user/order-view/{order_id}/',[UserController::class,'orderView']);
Route::get('/category/product-show/{cat_id}/',[fontendController::class,'catWisePro']);
Route::post('/search',[fontendController::class,'searching'])->name('search.all');


 Route::get('state',[shippingAreaController::class,'stateCreate'])->name('state');
 Route::post('state/store',[shippingAreaController::class,'stateStore'])->name('state-store');
 Route::get('/state-edit/{id}/',[shippingAreaController::class,'stateEdit'])->name('state-Edit');
 Route::post('state/update',[shippingAreaController::class,'stateUpdate']);
Route::get('/state-delete/{id}/',[shippingAreaController::class,'stateDestroy']);


Route::get('admin/order',[AdminOrderController::class,'index'])->name('admin.orders');
Route::get('/admin/orders/view/{id}/',[AdminOrderController::class,'viewOrder']);


Route::get('customer/order',[DeliveryShowController::class,'orderView'])->name('customer.order');
Route::get('/customer/order-view/{id}',[DeliveryShowController::class,'details']);

