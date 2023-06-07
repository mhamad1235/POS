<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sell extends Model
{
    use HasFactory;
    protected $table='sellproduct';
    public   $timestamps = false;
    protected $casts = [
        'name_product' => 'array',
        'quantity' => 'array',
        'nrx_tak' => 'array',
    ];
}
