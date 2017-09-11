<form class="form-horizontal form-label-left"  method="POST" v-on:submit.prevent="updateCategoria">
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true" id="update">
                <div class="modal-dialog modal-sm">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title">Editar</h4>
                        </div>

                        <div class="modal-body">

                          <label class="control-label ">Nombre: </label>


                          <input class="form-control" type="text" name="nombre" v-model="nombre">


                          <label class="control-label" >Descripcion: </label>

                          <input class="form-control " type="text" name="descripcion" v-model="descripcion">

                        <span v-for="error in errors.errors" class="text-danger">@{{ error }}</span>

                        </div>




                        <div class="modal-footer">

                          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                          <button type="submit" class="btn btn-success">Guardar</button>
                        </div><!-- Fin modal Footer -->

                      </div>
                    </div>


  </div>
      </form>
