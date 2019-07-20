<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['category_id','title','content','author','slug','tags'];
    //relazione uno a molti
      public function category() {
        return $this->belongsTo('App\Category');
      }
      //relazione molti a molti
      public function tags(){
        return $this->belongsToMany('App\Tag');
      }

}
