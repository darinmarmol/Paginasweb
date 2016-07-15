<?php

namespace examen;

use Illuminate\Database\Eloquent\Model;

class organigrama extends Model
{
	protected $table="organigramas";

	protected $fillable=['nombreorganigrama','tipoarea']
    //
}
