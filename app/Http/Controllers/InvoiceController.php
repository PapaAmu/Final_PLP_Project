<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;

class InvoiceController extends Controller
{
    public function get_all_invoices()
    {
        $invoices = Invoice::all();
        return response()->json([
            'invoice' => $invoices
        ], 200);
    }
}
