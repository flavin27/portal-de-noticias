<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // Importe o trait HasFactory
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory; // Use o trait HasFactory

    public function user()
    {
        return $this->belongsTo(User::class, 'username', 'username');
    }
}
