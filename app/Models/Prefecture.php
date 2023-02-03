<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prefecture extends Model
{
    use HasFactory;
    public function getByLimit(int $limit_count = 47)
{
    return $this->orderBy('id', 'ASC')->limit($limit_count)->get();
}
}
