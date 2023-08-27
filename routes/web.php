<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\EnrollmentItemController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\QueryController;
use App\Http\Controllers\QuotationController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\PhotoController;
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


Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/service', 'service')->name('service');
    Route::get('/cource', 'cource')->name('cource');
    Route::get('/gallery', 'gallery')->name('gallery');
    Route::get('/contact', 'contact')->name('contact');
    Route::post('/subscribe','subscribe')->name('subscribe');
    Route::get('/terms','terms')->name('terms');
});


Route::get('hasan', function(){ return view ('index'); });


// course show
Route::group(['prefix' => 'courses'], function () {
    Route::get('/show/{course}', [CourseController::class, 'show'])->name('courses.details');
});

// services show
Route::group(['prefix' => 'services'], function () {
    Route::get('/show/{service}', [ServiceController::class, 'show'])->name('services.details');
});

// Service Quatations
Route::group(['prefix' => 'quotations'], function () {
    Route::post('create', [QuotationController::class, 'create'])->name('quotations.create');
});

// User Query
Route::post('/contactUs/send', [QueryController::class, 'store'])->name('contsend');

Route::middleware('auth')->group(function () {



    // Dashboard
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    Route::post('/markNotification', [HomeController::class, 'markNotification'])->name('markNotification');


    // Cart
    Route::group(['prefix' => 'carts'], function () {
        Route::get('/', [CartController::class,  'index'])->name('carts.index');
        Route::post('/checkout', [CartController::class,  'checkout'])->name('carts.checkout');
        Route::post('/store', [CartController::class,  'store'])->name('carts.store');
        Route::delete('/delete/{cart}', [CartController::class,  'destroy'])->name('carts.destroy');
    });

    // Enrollment
    Route::group(['prefix' => 'enrollments'], function () {
        Route::get('/', [EnrollmentController::class,  'index'])->name('enrollments.index');
        Route::get('/{enrollment}/edit', [EnrollmentController::class,  'edit'])->name('enrollments.edit');
        Route::post('/store', [EnrollmentController::class,  'store'])->name('enrollments.store');
        Route::patch('/{enrollment}/update', [EnrollmentController::class,  'update'])->name('enrollments.update');
    });

    // Enrollment Item
    Route::resource('enrollmentitems', EnrollmentItemController::class);


    // Profile
    Route::group(['prefix' => 'profile'], function () {
        Route::get('/', [ProfileController::class,  'index'])->name('profile.index');
        Route::get('/edit', [ProfileController::class,  'edit'])->name('profile.edit');
        Route::patch('/', [ProfileController::class,  'update'])->name('profile.update');
        Route::patch('/ppupdate', [ProfileController::class,  'ppupdate'])->name('profile.ppupdate');

        Route::delete('/', [ProfileController::class,  'destroy'])->name('profile.destroy');

        Route::get('/dashboard', [ProfileController::class,  'dashboard'])->name('profile.dashboard');
        Route::get('/ecources', [ProfileController::class,  'ecources'])->name('profile.ecources');
        Route::get('/mycource', [ProfileController::class,  'mycource'])->name('profile.mycource');
    });


    // Resource
    Route::resource('categories', CategoryController::class);
    Route::resource('courses', CourseController::class);
    Route::resource('batches', BatchController::class);
    Route::resource('users', UserController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('permissions', PermissionController::class);
    Route::resource('subscribers', SubscriberController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('photos', PhotoController::class);


    // Album
    Route::group(['prefix' => 'albums'], function () {
        Route::get('/', [AlbumController::class, 'index'])->name('albums.index');
        Route::get('/create', [AlbumController::class, 'create'])->name('albums.create');
        Route::post('/store', [AlbumController::class, 'store'])->name('albums.store');
        Route::delete('/{album}', [AlbumController::class, 'destroy'])->name('albums.destroy');
        Route::get('/{album}', [AlbumController::class, 'show'])->name('albums.show');
        Route::get('/allphotos', [AlbumController::class, 'allphotos'])->name('albums.allphotos');
        Route::get('/{album}/edit', [AlbumController::class, 'edit'])->name('albums.edit');
        Route::patch('/{album}', [AlbumController::class, 'update'])->name('albums.update');
    });

    // News letters
    Route::group(['prefix' => 'newsletters'], function () {
        Route::get('/', [NewsletterController::class, 'index'])->name('newsletters.index');
        Route::post('/store', [NewsletterController::class, 'store'])->name('newsletters.store');
        Route::get('/show/{newsletter}', [NewsletterController::class, 'show'])->name('newsletters.show');
        Route::post('/send/{newsletter}', [NewsletterController::class, 'send'])->name('newsletters.send');
        Route::delete('/delete/{newsletter}', [NewsletterController::class, 'destroy'])->name('newsletters.destroy');
    });

    // Contuct us query
    Route::group(['prefix' => 'quaries'], function () {
        Route::get('allquaries', [QueryController::class, 'allquaries'])->name('quaries.all');
        Route::get('readed', [QueryController::class, 'readed'])->name('quaries.readed');
        Route::get('unreaded', [QueryController::class, 'unreaded'])->name('quaries.unreaded');
        Route::get('read/{query}', [QueryController::class, 'read'])->name('quaries.read');
        Route::post('replay', [QueryController::class, 'replay'])->name('quaries.replay');
        Route::patch('toggle/{query}', [QueryController::class, 'toggle'])->name('toggleQuery');
        Route::delete('delete/{query}', [QueryController::class, 'destroy'])->name('deleteQuery');
    });

    // Service Quatations
    Route::group(['prefix' => 'quotations'], function () {
        Route::get('/', [QuotationController::class, 'index'])->name('quotations.all');
        Route::get('/show/{quotation}', [QuotationController::class, 'show'])->name('quotations.show');
        Route::post('/store', [QuotationController::class, 'store'])->name('quotations.store');
        Route::delete('/delete/{quotation}', [QuotationController::class, 'destroy'])->name('quotations.destroy');
        Route::get('fileDownload', [QuotationController::class, 'fileDownload'])->name('fileDownload');

    });

});

require __DIR__.'/auth.php';
