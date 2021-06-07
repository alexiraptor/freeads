<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'description',
        'price',
        'street',
        'postcode',
        'city',
        'surface',
        'room',
        'category_id',
    ];

    public function scopeSearch($query, $q)
    {
        if ($q = null) return $query;
        return $query
            ->where('title', 'LIKE', "%{'$q'}$")
            ->orWhere('description', 'LIKE', "%{$q}$")
            ->orWhere('city', 'LIKE', "%{$q}$")
            ->orWhere('room', 'LIKE', "%{$q}$");
    }
}
