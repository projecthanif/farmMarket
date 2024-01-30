<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addresses extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'fullname',
        'address',
        'state',
        'city',
        'phone',
        'isPrimary'
    ];

    public function orders()
    {
        return $this->hasMany('App\Models\orders', 'user_id');
    }
}
