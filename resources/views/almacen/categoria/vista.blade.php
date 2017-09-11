@extends('layouts.admin')
@section('contenido')

<div id="crud" class="">

    <div class="clearfix"></div>

    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Listado de Categorias </h2>

            <a v-on:click="cleanForm()"><button class="btn btn-success pull-right" data-toggle="modal" data-target="#create"><i class="fa fa-file"></i> Nuevo </button></a>

          <div class="clearfix"></div>

        </div>

        <div class="x_content">
          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                <input v-on:keyup="search()" v-model="searchText" name="searchText" type="text" class="form-control has-feedback-left" placeholder="Buscar...">
              <span class="fa fa-search form-control-feedback left" aria-hidden="true"></span>
          </div>
          <p class="text-muted font-13 m-b-30">
            Crea Categorias para tus diferentes productos .
          </p>
          <div class="table-resposive"> <!-- Inicia Contenido de Tabla -->
            <table id="datatable-buttons" class="table table-striped table-bordered dataTable no-footer">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Nombre</th>
                  <th>Descripcion</th>
                  <th>Opciones</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="keep in keeps">
                  <td>@{{keep.idcategoria}}</td>
                  <td>@{{keep.nombre}}</td>
                  <td>@{{keep.descripcion}}</td>
                  <td><a v-on:click="getValCategoria(keep)" ><button class="btn btn-info btn-sm" type="button" data-toggle="modal" data-target="#update"><i class="fa fa-pencil"></i> </button>
                  </a><a v-on:click.prevent="deleteCategoria(keep)" href="#"><button class="btn btn-danger btn-sm " type="button"><i class="fa fa-trash"></i> </button></a></td>
                </tr>
              </tbody>
            </table>

            @include('almacen/categoria/modal')
            @include('almacen/categoria/modalE')
        </div> <!-- fin contenido de Tabla -->

        </div><!-- fin contenedor -->
      </div>
    </div>



</div>



@endsection
