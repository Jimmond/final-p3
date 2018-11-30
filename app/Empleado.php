<?php

namespace FinalP3;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
  protected $fillable = ['nom_empl', 'email_empl', 'cargo', 'tel_empl'];
  public $table = "empleado";
  public $timestamps = false;
}
