<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestCreator extends Model
{
    use HasFactory;
    
    public $timestamps = true;
    protected $fillable = [
        'user_id', 'banner_image', 'bio', 'reason', 'status'
    ];

    // Add Eloquent if you want
}
