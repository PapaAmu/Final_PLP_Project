<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoiceController;

Route::get('/get_all_invoices', [InvoiceController::class, 'get_all_invoices']);
