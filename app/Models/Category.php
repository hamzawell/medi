<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{


    protected $fillable = [
        'parent_id',
        'category',
        'description',
        'image_url',           // Newly added column
        'is_active',           // Newly added column
        'created_at',          // Newly added column (optional, as it may be auto-managed by timestamps)
        'updated_at',          // Newly added column (optional, as it may be auto-managed by timestamps)
        'is_featured',         // Newly added column
        'sort_order',          // Newly added column
        'slug',                // Newly added column
        'meta_title',          // Newly added column
        'meta_description',    // Newly added column
        'meta_keywords',       // Newly added column
        'parent_category'      // Newly added column
    ];
    
}
