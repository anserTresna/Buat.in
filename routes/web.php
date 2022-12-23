<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\productController;
use App\Http\Controllers\checkoutController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registrasiController;



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
//LOGIN CONTROLLER

Route::get('/login',[loginController::class, 'index'])->name ('index');
Route::post('/login',[loginController::class, 'authenticate']);
Route::get('/logout', [loginController::class, 'logout'])->name ('logout');

//REGISTER ROUTE//

Route::get('/register',[registrasiController::class, 'index']);
Route::post('/register',[registrasiController::class, 'store']);

//MIDDLEWARE//
Route::group(['middleware' => ['auth','role:user']], function(){
    Route::get('/index', function () {
    return redirect('/');
    });
});
// Route::group(['middleware' => ['auth','role:admin']], function(){
//     isi karo halaman kanggo admin meluan percontroller kah, ko gawe route mulai sing misal /seller/blabla
// });
// });

Route::group(['middleware' => ['auth','role:seller']], function(){
    Route::get('/seller',[productController::class,'index']);
    Route::get('/seller/create',[productController::class,'create']);
    Route::post('/seller/store',[productController::class,'store']);
    Route::get('/seller/edit/{id}',[productController::class,'edit']);
    Route::post('/seller/update/{id}',[productController::class,'update']);
    Route::get('/seller/destroy/{id}',[productController::class,'destroy']);
    });


Route::get('/404', function () {
    return view('404');
});

Route::get('/forget', function () {
    return view('forgetpassword.index');
});



Route::get('/', function () {
    return view('dashboard');
});




/**Route::get('home', function () {
    return view('Home.home');
});**/

Route::get('/productlist', function () {
    return view('productlist.index');
});
Route::get('/product', function () {
    return view('product.index');
});

Route::get('/contact', function () {
    return view('contact.index');
});

Route::get('/about', function () {
    return view('About.index');
});

Route::get('/checkout', function () {
    return view('checkout.index');
});

// Route::get('/register', function () {
//     return view('register.index');
// });

// Route::get('/login', function () {
//     return view('login.index');
// });

Route::get('/rumahan', function () {
    return view('daftarproduk.rumahan');
});

Route::get('/akad', function () {
    return view('daftarproduk.akad');
});
Route::get('/gedung', function () {
    return view('daftarproduk.gedung');
});

// Route::get('/', function () {
//     return view('dashsell');
// });

Route::get('/dashsell', function () {
    $title = 'Dashboard';
    $slug = 'dashsell';
    return view('dashsell', compact('title', 'slug'));
});

Route::get('/dashboard', function () {
    $title = 'Dashboard';
    $slug = 'dashboard';
    return view('dashboard', compact('title', 'slug'));
});

Route::get('/dashsell',[productController::class,'index']);
Route::get('/dashsell/create',[productController::class,'create']);
Route::post('/dashsell/store',[productController::class,'store']);
Route::get('/dashsell/edit/{id}',[productController::class,'edit']);
Route::post('/dashsell/update/{id}',[productController::class,'update']);
Route::get('/dashsell/destroy/{id}',[productController::class,'destroy']);
