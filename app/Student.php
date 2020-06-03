<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'user_id',
        'boleta',
        'telephone',
        'status',
        'img1',
        'img2'      
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
