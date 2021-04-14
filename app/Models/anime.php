<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class anime extends Model
{
   use HasFactory;

    public function reviews() {
        return $this->hasMany(Review::class)->orderBy('created_at', 'DESC');
    }
}
