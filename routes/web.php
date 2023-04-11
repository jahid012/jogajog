<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\BookmarksController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListingsController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\MyListingsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\SuccessStoriesController;
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

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/listings', [ListingsController::class, 'index'])->name('listings');
Route::get('/add-listings', [ListingsController::class, 'create'])->name('listings.create');
Route::get('/success-stories', [SuccessStoriesController::class, 'index'])->name('success-stories');

Route::get('/dashboard', function () {
    return view('backend.pages.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard/add-listings', [ListingsController::class, 'createByDashboard'])->middleware(['auth', 'verified'])->name('dashboard.listings.create');
Route::get('/dashboard/messages', [MessageController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard.message.index');
Route::get('/dashboard/bookings', [BookingController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard.booking.index');

Route::get('/dashboard/my-listings', [MyListingsController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard.mylisting.index');
Route::get('/dashboard/bookmarks', [BookmarksController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard.bookmark.index');
Route::get('/dashboard/reviews', [ReviewsController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard.review.index');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
