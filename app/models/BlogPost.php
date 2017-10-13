<?php namespace App\models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model {
    public function user(){
        return $this->belongsTo('App\User');
    }

	//

}
