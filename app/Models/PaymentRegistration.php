<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PaymentRegistration extends Model
{
    use HasFactory, SoftDeletes;


    protected $fillable = [
        'payment_proof',
        'payment_amount',
        'status',
    ];
}
