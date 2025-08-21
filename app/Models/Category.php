<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'slug', 'parent_id', 'description', 'status'
    ];

    // A category may have many children
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    // A category may belong to a parent
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }
}
