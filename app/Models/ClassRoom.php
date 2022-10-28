<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ClassRoom extends Model
{
    
    use HasFactory;
    protected $fillable = [
        'name', 'age','slug', 'body','image'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getSlugAttribute()
    {
        return Str::slug($this->name);
    }

    

}
