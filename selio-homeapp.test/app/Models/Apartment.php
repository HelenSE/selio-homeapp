<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    protected $fillable = ['name', 'address', 'latitude', 'longitude', 'description', 'is_featured', 'main_photo', 'people_minimum', 'people_maximum', 'price_per_hour', 'is_features', 'location_id', 'category_type'];

    public function location()
    {
        return $this->belongsTo(Location::class, 'location_id', 'id');
    }

    public function categoryTypes()
    {
        return $this->belongsToMany(CategoryType::class, 'apartment_category_types', 'apartment_id','category_type_id');
    }

    use HasFactory;
}
