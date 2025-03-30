<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'status_id',
        'external_id',
        'result',
        'created_at',
        'updated_at',
    ];


    public function status(){
        return $this->belongsTo(Status::class);
    }

    public function calls(){
        return $this->hasMany(Call::class);
    }
}
