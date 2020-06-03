<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'slug',
        'guaranty',
        'description',
        'status',
        'img'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function subcategories(){
        return $this->belongsToMany(Subcategory::class);
    }
}
