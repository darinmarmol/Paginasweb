<?php

namespace examen;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
	protected $table="usuarios";

	protected $fillable =['nombre','usuario','email','password','tipo'];
    //
}
