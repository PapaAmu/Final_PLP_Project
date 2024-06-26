<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoiceController;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/NewInvoices', function () {
    return Inertia::render('NewInvoices', [
        'title' => 'New Invoices',
    ]);
})->middleware(['auth', 'verified'])->name('NewInvoices');

Route::get('/api/get_all_invoices', [InvoiceController::class, 'get_all_invoices']);

Route::get('/api/search_invoice', [InvoiceController::class, 'search_invoice']);

Route::post('/create_invoice', [InvoiceController::class, 'create_invoice']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
