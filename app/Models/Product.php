<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{


    protected $fillable = [
        'name',
        
        'description',
        'price',
        'image_url', 
        'sub_category_id' ,       
        'is_active',           
        'created_at',         
        'updated_at',         
        
    ];
    
}
