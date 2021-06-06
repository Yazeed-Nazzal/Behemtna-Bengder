<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $casts = [
        'created_at'  => 'date:Y-m-d h:i',
    ];

    protected $guarded;
    use HasFactory;
}
