<?php

namespace EasyFood;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
  protected $table='articulo';

  protected $primaryKey='idarticulo';

  public $timestamps=false;

  protected $fillable = [
    'idcategoria',
    'idalamcen',
    'idmedida',
    'codigo',
    'nombre',
    'descripcion',
    'imagen',
    'estado',
    'enmenu',
    'tiene_ingredientes'
  ];
}
