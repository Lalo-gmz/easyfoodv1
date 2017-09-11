<?php

namespace EasyFood\Http\Controllers;

use Illuminate\Http\Request;

use EasyFood\Http\Requests;
use EasyFood\Categoria;

class CategoriaController extends Controller
{
  public function __construct()
  {

  }
  public function index()
  {

    $tasks = Categoria::where('condicion','=','1')->orderBy('idcategoria', 'DESC')->get();
    return $tasks;

  }

  public function store(Request $request)
  {
    $this->validate($request, [
        'nombre' => 'required',
        'descripcion' => 'required'
    ]);

    Categoria::create($request->all());
    return;

  }
  public function show($request)
  {
    $tasks = Categoria::where('nombre','LIKE','%'.$request.'%')->where('condicion','=','1')->orderBy('idcategoria', 'DESC')->get();
    return $tasks;
  }

  public function update(Request $request, $id)
  {
    $this->validate($request, [
        'nombre' => 'required',
        'descripcion' => 'required'
    ]);

    $props=Categoria::findOrFail($id);
    $props->nombre=$request->get('nombre');
    $props->descripcion=$request->get('descripcion');
    $props->save();

  }
  public function destroy($id)
  {
    $props=Categoria::findOrFail($id);
    $props->condicion='0';
    $props->save();

  }
}
