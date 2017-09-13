<?php

namespace EasyFood;

use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
  protected $table='receta';

  protected $primaryKey='idreceta';

  public $timestamps=false;

  protected $fillable = [
    'nombre',
    'descripcion'

  ];
}
