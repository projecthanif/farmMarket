<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    public function category()
    {
        return $this->belongsTo('App\Models\category', 'category_id');
    }

    public function attributes()
    {
        return $this->hasMany('App\Models\productAttribute', 'product_id');
    }

    public function orders()
    {
        return $this->hasMany('App\Models\Orders', 'prod_id');
    }

    public function images()
    {
        return $this->hasMany('App\Models\productsImage');
    }
}
