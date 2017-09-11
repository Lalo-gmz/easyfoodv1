<?php

namespace EasyFood\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use EasyFood\Http\Requests\ArticuloFormRequest;
use DB;

class ArticuloController extends Controller
{
  public function __construct()
  {

  }
  public function index(Request $request)
  {
    if ($request)
    {
        $query=trim($request->get('searchText'));
        $articulos=DB::table('articulo')->where('condicion','=','1')->where('nombre','LIKE','%'.$query.'%')
        ->orderBy('idcategoria','desc')
        ->paginate(7);
        return view('almacen.categoria.index',["categorias"=>$categorias,"searchText=>$query"]);
    }

  }
  public function create()
  {
    return view("almacen.categoria.create");
  }
  public function store(CategoriaFormRequest $request)
  {
    $categoria= new Categoria;
    $categoria->nombre=$request->get('nombre');
    $categoria->descripcion=$request->get('descripcion');
    $categoria->condicion='1';
    $categoria->save();
    return Redirect::to('almacen/categoria');
  }
  public function show($id)
  {
    return view("almacen.categoria.show",["categoria"=>Categoria::findOrFail($id)]);
  }
  public function edit($id)
  {
    return view("almacen.categoria.edit",["categoria"=>Categoria::findOrFail($id)]);
  }
  public function update(CategoriaFormRequest $request,$id)
  {
    $categoria=Categoria::findOrFail($id);
    $categoria->nombre=$request->get('nombre');
    $categoria->descripcion=$request->get('descripcion');
    $categoria->save();
    return Redirect::to("almacen/categoria");
  }
  public function destroy($id)
  {
    $categoria=Categoria::findOrFail($id);
    $categoria->condicion='0';
    $categoria->save();
    return Redirect::to("almacen/categoria");
  }
}
