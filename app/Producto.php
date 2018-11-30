<?php

namespace FinalP3;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{   public  $table = "producto";
    protected $fillable = ['nom_prod', 'prec_venta_total', 'prec_venta_unidad', 'prec_compra', 'fecha_venc', 'stock'];
    public $timestamps = false;
}
