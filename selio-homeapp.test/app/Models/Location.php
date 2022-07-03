<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = ['name', 'slug', 'photo'];

    public function apartments()
    {
        return $this->hasMany(Apartment::class, 'location_id', 'id');
    }
    use HasFactory;
}
