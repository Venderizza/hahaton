<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    const HOT = 1;
    const WARM = 2;
    const COLD = 3;
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];


}
