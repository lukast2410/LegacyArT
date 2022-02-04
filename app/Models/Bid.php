<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bid extends Model
{
    // TODO: Configure Soft Delete
    use HasFactory;
    
    public $timestamps = true;
    protected $fillable = [
        'user_id', 'art_id', 'amount', 'fee', 'status'
    ];

    // Add Eloquent if you want
}
