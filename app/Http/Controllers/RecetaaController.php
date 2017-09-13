<?php

namespace EasyFood\Http\Controllers;

use Illuminate\Http\Request;

use EasyFood\Http\Requests;
use EasyFood\Receta;

class RecetaController extends Controller
{
  public function __construct()
  {

  }
  public function index()
  {

      $tasks = Receta::where('condicion','=','1')->orderBy('idreceta', 'DESC')->get();
      return $tasks;



  }

  public function store(Request $request)
  {
    $this->validate($request, [
        'nombre' => 'required',
        'descripcion' => 'required'
    ]);

    Receta::create($request->all());
    return;

  }
  public function show($request)
  {
    $tasks = Receta::where('nombre','LIKE','%'.$request.'%')->where('condicion','=','1')->orderBy('idreceta', 'DESC')->get();
    return $tasks;
  }

  public function update(Request $request, $id)
  {
    $this->validate($request, [
        'nombre' => 'required',
        'descripcion' => 'required'
    ]);

    $Receta=Receta::findOrFail($id);
    $Receta->nombre=$request->get('nombre');
    $Receta->descripcion=$request->get('descripcion');
    $Receta->save();

  }
  public function destroy($id)
  {
    $categoria=Receta::findOrFail($id);
    $categoria->condicion='0';
    $categoria->save();

  }
}
