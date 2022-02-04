<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Art extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $keyType = 'string';
    protected $fillable = [
        'id', 'creator_id', 'owner_id', 'name', 'art_image', 'description', 'start_price', 'sold_price'
    ];

    // Add Eloquent if you want
}
