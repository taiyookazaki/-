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
    
    public function likedUsers()
    {
        return $this->belongsToMany(User::class, "likes", "gotouti_men_id", "user_id");
    }
}
