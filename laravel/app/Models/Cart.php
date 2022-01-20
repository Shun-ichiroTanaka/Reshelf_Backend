<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    /**
     *  CartはPostとUserの中間Model
    **/
    protected $fillable = [
        'user_id',
        'post_id',
    ];
}
