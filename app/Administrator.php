<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrator extends Model
{
    protected $fillable = [
        'user_id',
        'type',
        'curp'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
