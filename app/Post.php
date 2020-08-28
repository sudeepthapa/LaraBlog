<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table='posts';

    //One to One Relationship
    public function user(){
        return $this->belongsTo('App\User');
    }
    
    public function category()
    {
        return $this->hasOne('App\Category');
    }
}
