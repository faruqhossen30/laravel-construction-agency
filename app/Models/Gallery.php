<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'gallary_category_id', 'name'];

    public function category()
    {
        return $this->hasOne(GalleryCategory::class, 'id', 'gallary_category_id');
    }
}
