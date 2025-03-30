<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Call extends Model
{
    use HasFactory;

    protected $fillable = [
        'lead_id',
        'status_id',
        'path',

        'created_at',
        'updated_at',
    ];

    public function lead(){
        return $this->belongsTo(Lead::class);
    }
}
