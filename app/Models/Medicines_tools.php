<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicines_tools extends Model
{
    use HasFactory;

    protected $table = 'medicines_tools';

    protected $fillable = [
        'id',
        'tool_name',
        'tool_type',
        'tool_image',
    ];
}
