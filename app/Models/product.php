<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{

    protected $fillable = ['rating'];

    public function scopeFilter($query, array $filters)
    {
        if ($filters['product_name'] ?? false) {
            $query->where('product_name', 'like', '%' . request('tag') . '%');
        }
    }

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

    public function cart()
    {
        return $this->hasMany('App\Models\Cart', 'prod_id');
    }

    public function images()
    {
        return $this->hasMany('App\Models\productsImage');
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }
}
