<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bid extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    public $timestamps = true;
    protected $fillable = [
        'user_id', 'art_id', 'amount', 'fee', 'status'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function art(){
        return $this->belongsTo(Art::class, 'art_id');
    }
}
