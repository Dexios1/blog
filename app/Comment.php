<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    // comments belong to articles
    public function Article(){
        return $this->belongsTo(Article::class);
//        return $this->belongsTo('\App\Article','id','user_id');

}
