<?php

namespace EasyFood;

use Illuminate\Database\Eloquent\Model;

class RecetaDetalle extends Model
{
  protected $table='receta_detalle';

  protected $primaryKey='iddetallereceta';

  public $timestamps=false;

  protected $fillable = [
    'idpoducto',
    'ingrediente',
    'cantidad'

  ];
}
