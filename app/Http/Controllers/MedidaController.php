<?php

namespace EasyFood\Http\Controllers;

use Illuminate\Http\Request;

use EasyFood\Http\Requests;
use EasyFood\Medida;

class MedidaController extends Controller
{
  public function __construct()
  {

  }
  public function index()
  {

      $tasks = Medida::where('condicion','=','1')->orderBy('idmedida', 'DESC')->get();
      return $tasks;
    


  }

  public function store(Request $request)
  {
    $this->validate($request, [
        'nombre' => 'required',
        'simbolo' => 'required'
    ]);

    Medida::create($request->all());
    return;

  }
  public function show($request)
  {
    $tasks = Medida::where('nombre','LIKE','%'.$request.'%')->where('condicion','=','1')->orderBy('idmedida', 'DESC')->get();
    return $tasks;
  }

  public function update(Request $request, $id)
  {
    $this->validate($request, [
        'nombre' => 'required',
        'simbolo' => 'required'
    ]);

    $medida=Medida::findOrFail($id);
    $medida->nombre=$request->get('nombre');
    $medida->simbolo=$request->get('simbolo');
    $medida->save();

  }
  public function destroy($id)
  {
    $categoria=Medida::findOrFail($id);
    $categoria->condicion='0';
    $categoria->save();

  }
}
