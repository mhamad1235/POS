<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deptcompany extends Model
{
    use HasFactory;
    protected $table='deptcompany';
    public   $timestamps = false;
    protected $casts = [
        'name' => 'array',
        'type' => 'array',
        'price' => 'array',
        'number' => 'array',
        'barcode' => 'array',
        
    ];
}
