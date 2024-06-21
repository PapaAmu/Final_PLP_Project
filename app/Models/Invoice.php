<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'customer_id',
        'date',
        'due_date',
        'reference',
        'discount',
        'terms_and_conditions',
        'sub_total',
        'total',
    ];

    protected $attributes = [
        'total' => 0, // Default value for total
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}