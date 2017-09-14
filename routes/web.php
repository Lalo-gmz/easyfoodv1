<?php


Route::resource('p/categoria', 'CategoriaController', ['except' =>'create', 'edit']);
Route::resource('p/medida', 'MedidaController', ['except' =>'create', 'edit']);
Route::resource('p/receta', 'RecetaController', ['except' =>'create', 'edit']);


Route::get('medida', function () {
    return view('almacen/medida/vista');
});
Route::get('categoria', function () {
    return view('almacen/categoria/vista');
});

Route::get('/panel', function () {
    return view('panel/admin');
});

Route::get('/receta', function () {
    return view('almacen/receta/vista');
});
