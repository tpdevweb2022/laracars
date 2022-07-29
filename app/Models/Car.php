<?php

namespace App\Models;

use App\Models\Type;
use App\Models\Brand;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Car extends Model
{
    use HasFactory;

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
