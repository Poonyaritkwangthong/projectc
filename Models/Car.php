<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $table = 'car';
    protected $fillable = [
        'c_name',
        'c_img',
        'c_detail',
        'c_engine_id',
        'c_brand_id'
    ];
}
