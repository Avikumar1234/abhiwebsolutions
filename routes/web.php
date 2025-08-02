<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Middleware\IsAdmin;
use App\Http\Controllers\ServicePageController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\ChatbotController;



Route::post('/chatbot', [ChatbotController::class, 'handle']);

// services dropdown
Route::get('/services/logo-design', function () {
    return view('services.logo-design');
});
Route::get('/services/website-design', function () {
    return view('services.website-design');
});
Route::get('/services/social', function () {
    return view('services.social');
});

Route::get('/services/ecommerce', function () {
    return view('services.ecommerce');
});

// services dropdown end 




// -------------------------
// 🔵 Public Frontend Routes
// -------------------------
// web.php
Route::middleware(['auth', \App\Http\Middleware\IsAdmin::class])
    ->prefix('admin')->name('admin.')
    ->group(function () {
        Route::get('/chat-messages', [\App\Http\Controllers\Admin\ChatController::class, 'index'])->name('chat.index');
    });


Route::post('/chat', [ChatController::class, 'store'])->name('chat.store');

// Home
Route::get('/', function () {
    return view( 'frontend.home');
})->name('home');


// About
Route::view('/about', 'frontend.about')->name('about');
// Route::view('/services', 'frontend.services')->name('services');

// Services (Frontend display)
// Route::get('/services', [ServicePageController::class, 'index'])->name('frontend.services');
Route::get('/avi', [ServicePageController::class, 'index']);

// Route::get('/', [ServicePageController::class, 'home'])->name('home');
// Route::get('/', [PageController::class, 'home'])->name('home');

// Contact Page
Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');

// Contact Submit POST
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');


// -----------------------------
// 🔐 Authenticated User Routes
// -----------------------------

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// -------------------------
// 🔒 Admin Panel Routes
// -------------------------

Route::middleware(['auth', IsAdmin::class])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

    // Admin Dashboard
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    // Services CRUD for Admin
    Route::get('services/{service}/delete', [ServiceController::class, 'confirmDelete'])->name('services.confirmDelete');
    Route::resource('services', ServiceController::class);
    Route::get('/contacts', [AdminContactController::class, 'index'])->name('contacts.index');
Route::get('/contacts/export', [AdminContactController::class, 'export'])->name('contacts.export');

});


// -------------------------
// 🔑 Auth Scaffolding (Breeze)
// -------------------------

require __DIR__.'/auth.php';
