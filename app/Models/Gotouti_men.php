<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gotouti_men extends Model
{
    use HasFactory;
    public function prefecture()
    {
        return $this->belongsTo(Prefecture::class);
    }
    
}
