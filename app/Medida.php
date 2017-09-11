<?php

namespace EasyFood;

use Illuminate\Database\Eloquent\Model;

class Medida extends Model
{
  protected $table='medida';

  protected $primaryKey='idmedida';

  public $timestamps=false;

  protected $fillable = [
    'nombre',
    'simbolo',
    'condicion'

  ];
}
