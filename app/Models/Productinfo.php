<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productinfo extends Model
{
    protected $table='productinfo';
    public   $timestamps = false;
    use HasFactory;
}
