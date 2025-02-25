<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'brand',
        'registration',
        'licence',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
