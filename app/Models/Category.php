<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;


    public function getRouteKeyName()
    {
        return "slug";
    }
    protected $fillable = ['name', 'slug', 'summary', 'updated_at', 'created_at'];
        // Relación uno a muchos
    public function posts(){
        return $this->hasMany(Post::class);
    }
}
