<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class people extends Model
{
    
	protected $fillable = [
		'id','name','height','mass','hair_color','skin_color','eye_color','birth_year','gender','url',
	];

}
