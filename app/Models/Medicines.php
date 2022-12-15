<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicines extends Model
{
    use HasFactory;

    protected $table = 'medicines';

    protected $fillable = [
        'id',
        'medicine_name',
        'medicine_type',
        'medicine_image',
    ];

}
