<?php

namespace App\Models;


use App\Models\PropertyMedia;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    public function media()
    {
        return $this->hasMany(PropertyMedia::class);
    }
}
