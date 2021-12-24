<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Art extends Model
{
    use HasFactory;
    public $timestamps = true;

    public function creator(){
        return $this->belongsTo(Creator::class, 'creator_id');
    }

    public function owner(){
        return $this->belongsTo(User::class, 'owner_id');
    }
}
