<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;    
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AboutController;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Location;

Route::get('/', [HomeController::class, 'index']);


Route::get('/tentang', [HomeController::class, 'tentang']);
Route::get('/berita', 'NewsController@berita')->name('berita');
Route::get('/berita', [NewsController::class, 'berita'])->name('berita');
Route::get('/berita/{id}', [NewsController::class, 'show'])->name('berita.show');
Route::get('/image', [GalleryController::class, 'image']);
Route::get('/galeri/{id}', [GalleryController::class, 'show'])->name('galeri.show');
Route::get('/kontak', [HomeController::class, 'kontak'])->name('kontak');


   
    Route::get('/news', [NewsController::class, 'index'])->name('news.index');

    Route::get('/news/create', [NewsController::class, 'create'])->name('news.create');
    Route::post('/news', [NewsController::class, 'store'])->name('news.store');
    Route::get('/news/{id}/edit', [NewsController::class, 'edit'])->name('news.edit');
    Route::put('/news/{id}', [NewsController::class, 'update'])->name('news.update');
    Route::delete('/news/{id}', [NewsController::class, 'destroy'])->name('news.destroy');

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/login', [AuthController::class,'index'])->name('login');
Route::get('register', [AuthController::class,'register'])->name('register');
Route::post('proses_login', [AuthController::class,'proses_login'])->name('proses_login');
Route::get('logout', [AuthController::class,'logout'])->name('logout');

Route::post('proses_register',[AuthController::class,'proses_register'])->name('proses_register');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:admin']], function () {
        Route::resource('admin', HomeController::class);
    });
    Route::group(['middleware' => ['cek_login:user']], function () {
        Route::resource('user', UserController::class);
    });
});
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login'); 
})->name('logout');
Route::resource('gallery', GalleryController::class);

Route::post('/kontak', [ContactController::class, 'store'])->name('contact.store');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');
Route::delete('/gallery/{id}', [GalleryController::class, 'destroy'])->name('gallery.destroy');

Route::get('gallery', [GalleryController::class, 'index']);
Route::get('/gallery/create', [GalleryController::class, 'create'])->name('gallery.create');

Route::get('/galeri', [GalleryController::class, 'showGallery']);

Route::get('/galeri', [GalleryController::class, 'index'])->name('gallery.index');

Route::get('/about', [AboutController::class, 'index'])->name('about.index');
Route::resource('about', AboutController::class);

Route::get('/news', [NewsController::class, 'index'])->middleware('auth');
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/proses_login', [AuthController::class, 'proses_login']);
Route::resource('news', NewsController::class);
// routes/web.php
Route::get('/about', [AboutController::class, 'index'])->name('about.index');
Route::get('/about/edit/{id}', [AboutController::class, 'edit'])->name('about.edit');
Route::put('/about/update/{id}', [AboutController::class, 'update'])->name('about.update');
Route::get('/tentang', [AboutController::class, 'showAboutPage']);


Route::get('/kontak-kami', [ContactController::class, 'index'])->name('kontak-kami.index');

Route::post('/kontak', [ContactController::class, 'store'])->name('contact.store');
Route::delete('/kontak/{id}', [ContactController::class, 'destroy'])->name('contact.destroy');
Route::get('/contact-info', [ContactController::class, 'showContactInfoForm'])->name('contact.info');
Route::post('/contact-info', [ContactController::class, 'updateContactInfo'])->name('contact.info.update');


Route::get('/berita/{id}', [NewsController::class, 'show'])->name('news.show');

Route::resource('/news', NewsController::class)->middleware('auth');
Route::resource('/gallery', GalleryController::class)->middleware('auth');
Route::resource('/about', AboutController::class)->middleware('auth');
Route::resource('/kontak-kami', ContactController::class)->middleware('auth');
