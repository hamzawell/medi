<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{


protected $table= 'subcategories';

    protected $fillable = [
        'category_id',
        'subcategory',
        'description',
        'description',           // Newly added column
        'image_url',           // Newly added column
        'is_active',          // Newly added column (optional, as it may be auto-managed by timestamps)
        'is_featured',          // Newly added column (optional, as it may be auto-managed by timestamps)
        'created_at',         // Newly added column
        'updated_at'     // Newly added column
    ];
    
}
