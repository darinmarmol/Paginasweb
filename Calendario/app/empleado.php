<?php

namespace examen;

use Illuminate\Database\Eloquent\Model;

class empleado extends Model
{
	protected $table="empleados";

	protected $fillable=['nombre','apellidos'];
    //
}
