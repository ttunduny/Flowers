<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    //      
    protected $fillable = [
        'image_name','image_type', 'product_id','status'
    ];
}
