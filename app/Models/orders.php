<?php

namespace App\Models;

use App\Models\User;
use App\Models\addresses;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class orders extends Model
{
    use HasFactory;

    // protected $table = 'orders';

    // protected $with = [];

    protected $fillable = ['is_rated'];

    public function product()
    {
        return $this->belongsTo(product::class, 'prod_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // public function addresses()
    // {
    //     return $this->belongsTo(addresses::class, 'user_id');
    // }

    public function addresses()
    {
        return $this->belongsTo(addresses::class, 'user_id');
    }
}
