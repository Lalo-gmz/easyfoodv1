
new Vue({
    el: '#crud',
    created: function() {
      this.getKeeps();
    },

    data: {
      base: 'p'+ window.location.pathname + '/',
      searchText: '',
      keeps: [],
      nombre: '',
      id: '',
      simbolo: '',
      descripcion: '',
      errors: [],

    },

    methods: {
     // ---------- IMPRIME TABLA -------------------

      getKeeps: function() {
        var url = this.base;
          axios.get(url).then(response => {
              this.keeps = response.data
          });
      },

      //------------METODOS BORRAR----------------

      deleteMedida: function(keep){
        var url = this.base + keep.idmedida;
        axios.delete(url).then(response => {
            this.getKeeps();
              toastr.success('Eliminado correctamente');
        });
      },

      deleteCategoria: function(keep){
        var url = this.base + keep.idcategoria;
        axios.delete(url).then(response => {
            this.getKeeps();
              toastr.success('Eliminado correctamente');
        });
      },

      deleteReceta: function(keep){
        var url = this.base + keep.idreceta;
        axios.delete(url).then(response => {
            this.getKeeps();
              toastr.success('Eliminado correctamente');
        });
      },

      //--------------METODOS CREAR NUEVO ---------------------

      createMedida: function() {
        var url = this.base;
          axios.post(url, {
            nombre: this.nombre,
            simbolo: this.simbolo,
            condicion: 1
          }).then(response => {
              this.getKeeps();
              this.cleanForm();
              $('#create').modal('hide');
              toastr.success('Guardado correctamente');
          }).catch(error => {
              this.errors = error.response.data
          });
      },

      createCategoria: function() {
        var url = this.base;
          axios.post(url, {
            nombre: this.nombre,
            descripcion: this.descripcion,
            condicion: 1
          }).then(response => {
              this.getKeeps();
              this.cleanForm();
              $('#create').modal('hide');
              toastr.success('Guardado correctamente');
          }).catch(error => {
              this.errors = error.response.data
          });
      },

      createReceta: function() {
        var url = this.base;
          axios.post(url, {
            nombre: this.nombre,
            descripcion: this.descripcion,
            condicion: 1
          }).then(response => {
              this.getKeeps();
              this.cleanForm();
              $('#create').modal('hide');
              toastr.success('Guardado correctamente');
          }).catch(error => {
              this.errors = error.response.data
          });
      },

      // ------------- METODOS UPDATE -----------------

      updateMedida: function() {
        var url = this.base + this.id;
          axios.patch(url, {
            nombre: this.nombre,
            simbolo: this.simbolo
          }).then(response => {
              this.getKeeps();
              this.cleanForm();
              $('#update').modal('hide');
              toastr.success('Editado correctamente');
          }).catch(error => {
              this.errors = error.response.data
          });

      },

      updateCategoria: function() {
        var url = this.base + this.id;
          axios.patch(url, {
            nombre: this.nombre,
            descripcion: this.descripcion
          }).then(response => {
              this.getKeeps();
              this.cleanForm();
              $('#update').modal('hide');
              toastr.success('Editado correctamente');
          }).catch(error => {
              this.errors = error.response.data
          });

      },

      updateReceta: function() {
        var url = this.base + this.id;
          axios.patch(url, {
            nombre: this.nombre,
            descripcion: this.descripcion
          }).then(response => {
              this.getKeeps();
              this.cleanForm();
              $('#update').modal('hide');
              toastr.success('Editado correctamente');
          }).catch(error => {
              this.errors = error.response.data
          });

      },

   // ------------- BUSCAR ----------------
      search: function(){
        var url = this.base + this.searchText;
        axios.get(url).then(response => {
            this.keeps = response.data

        });
      },

      // -------------- OBTENER VALORES PARA EDITAR --------------
      getValMedida: function(keep) {
        this.errors = [];
        this.id = keep.idmedida;
        this.nombre = keep.nombre;
        this.simbolo = keep.simbolo;

      },

      getValCategoria: function(keep) {
        this.errors = [];
        this.id = keep.idcategoria;
        this.nombre = keep.nombre;
        this.descripcion = keep.descripcion;

      },

      getValReceta: function(keep) {
        this.errors = [];
        this.id = keep.idreceta;
        this.nombre = keep.nombre;
        this.descripcion = keep.descripcion;

      },

      // -------------- limpiar formularios ----------------
      cleanForm: function(){
        this.id = '';
        this.nombre = '';
        this.simbolo = '';
        this.descripcion = '';
        this.errors = [];

      },




    }

  });
