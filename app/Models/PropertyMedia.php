<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Property;
class PropertyMedia extends Model
{
    use HasFactory;

    public function property()
    {
        return $this->hasone(Property::class);
    }

}
