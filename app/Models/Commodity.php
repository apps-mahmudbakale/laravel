<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commodity extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'current_price',
        'daily_change',
        'std_change',
    ];
}
