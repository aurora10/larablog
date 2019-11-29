<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //protected $fillable = ['category_id', 'photo_id','post_id', 'name', 'body'];
    protected $guarded =['id'];


    public function user() {
        return $this->belongsTo('App\User');
    }

    public function photo() {
        return $this->belongsTo('App\Photo');
    }

    public function category() {
        return $this->belongsTo('App\Category');
    }

}


