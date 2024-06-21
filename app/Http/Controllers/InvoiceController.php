<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;
use App\Models\Customer;
use App\Models\Counter;

class InvoiceController extends Controller
{
    public function get_all_invoices()
    {
        $invoices = Invoice::with('customer')->orderBy('id', 'DESC')->get();
        return response()->json(['invoices' => $invoices], 200); 
    }

    public function search_invoice(Request $request)
    {
        $search = $request->get('s');
        if ($search != null) {
            $invoices = Invoice::with('customer')->where('id', 'LIKE', "%$search%")->get();
            return response()->json([
                'invoices' => $invoices
            ], 200);
        } else {
            return $this->get_all_invoices();
        }
    }

    public function create_invoice(Request $request)
    {
        // Fetch the counter for invoices
        $counter = Counter::where('key', 'invoices')->first();

        // Calculate the next invoice number
        $nextNumber = $counter->value + 1;

        // Prepare data for the new invoice
        $invoiceData = [
            'number' => $counter->prefix . $nextNumber,
            'customer_id' => $request->input('customer_id'),
            'date' => $request->input('date'),
            'due_date' => $request->input('due_date'),
            'reference' => $request->input('reference'),
            'discount' => $request->input('discount', 0),
            'terms_and_conditions' => $request->input('terms_and_conditions', 'Default Terms and Conditions'),
            'sub_total' => 0,
            'total' => 0,
        ];

        // Create new invoice
        $invoice = Invoice::create($invoiceData);

        // Update the counter value
        $counter->value = $nextNumber;
        $counter->save();

        return response()->json($invoice, 200);
    }
}
