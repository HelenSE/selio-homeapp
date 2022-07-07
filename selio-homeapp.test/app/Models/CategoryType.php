<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryType extends Model
{
    protected $fillable = ['name', 'slug', 'photo'];

    public function apartments()
    {
        return $this->belongsToMany(Apartment::class, 'apartment_category_types', 'category_type_id','apartment_id');
    }
    use HasFactory;
}
