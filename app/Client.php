<?php

namespace FinalP3;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['nom_cli', 'email_cli', 'tel_cli'];
    public $table = "cliente";
    public $timestamps = false;
}
