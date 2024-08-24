<?php
$this->setLayout('layouts/admin');
?>

<!-- seccion del titulo -->
<?php
$this->startSection('titulo');
?>
Usuarios | Tienda Virtual
<?php
$this->endSection('titulo');
?>
<!-- fin seccion del titulo -->

<!-- Content Wrapper. Contains page content -->
<?php
$this->startSection('contenido');
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Usuarios</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- /.col-md-6 -->
                <div class="col-lg-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h5 class="m-0">Búsqueda de usuarios</h5>
                        </div>
                        <div class="card-body">
                            <form id="formulario-busqueda" class="form-inline">
                                <label class="my-1 mr-2" for="busqueda">Nombre</label>
                                <input type="text" class="form-control my-1 mr-sm-2" id="busqueda" name="busqueda" placeholder="Ingrese nombre de usuario">
                                <button type="submit" class="btn btn-primary my-1">Buscar</button>
                                <button onclick="modalCrear()" type="button"
                                    class="btn btn-success my-1 mx-1">Nuevo</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.col-md-6 -->
            </div>
            <div class="row">
                <div class="col-12" id="listado">

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<?php
$this->endSection('contenido');
?>
<!-- /.content-wrapper -->

<!-- inicio de modales  -->
<?php
$this->startSection('modales');
?>
<div class="modal fade" id="modal-agregar" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" id="modal-agregar-contenido">

        </div>
    </div>
</div>

<div class="modal fade" id="modal-editar" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" id="modal-editar-contenido">
            <div class="modal-header">
                <h4 class="modal-title">Editar persona</h4>
            </div>
            <form action="" id="formulario-editar" autocomplete="off">
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label" for="apellido_paterno">Apellido paterno</label>
                        <div class="col-sm-8">
                            <input type="text" name="apellido_paterno" id="apellido_paterno" class="form-control"
                                value="Apellido paterno persona" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label" for="apellido_materno">Apellido materno</label>
                        <div class="col-sm-8">
                            <input type="text" name="apellido_materno" id="apellido_materno" class="form-control"
                                value="Apellido paterno persona" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label" for="nombres">Nombres</label>
                        <div class="col-sm-8">
                            <input type="text" name="nombres" id="nombres" class="form-control"
                                value="Nombres persona" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label" for="fecha_nacimiento">Fecha de nacimiento</label>
                        <div class="col-sm-8">
                            <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control"
                                value="2021-06-01" />
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i
                            class="fas fa-window-close"></i> Cerrar
                    </button>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>
                        Actualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
$this->endSection('modales');
?>
<!-- fin de modales  -->

<!-- inicio de javascript  -->
<?php
$this->startSection('javascript');
?>
<script>
    document.getElementById('formulario-busqueda').addEventListener('submit', function(evento) {
        // desactiva el evento submit para que no se este recargando la pagina 
        evento.preventDefault();
        search();
    });

    //sirve para que cargue automaticamente todos los dato
    //estamos haciendo que escuche toda la pagina 
    document.addEventListener('DOMContentLoaded', function() {
        search();
    });

    function search() {
        const busqueda = document.getElementById('busqueda').value;
        const url = '/admin/usuarios/search?busqueda=' + busqueda;
        axios.get(url)
            .then(function(respuesta) {
                const contenido_html = respuesta.data;
                $('#listado').html(contenido_html)
            })
            .catch(function(erro) {
                if (error.response) {
                    toastr.error(error.response.data.message);
                } else {
                    toastr.error('error al buscar usuario');
                }
            })
    }

    // funciones para agregar al usuario

    function modalCrear() {

        const ruta = '/admin/usuarios/create';

        axios.get(ruta)
            .then(function(respuesta){
                const contenido_html = respuesta.data;
                $('#modal-agregar-contenido').html(contenido_html)
                $('#modal-agregar').modal('show');
            })
            .catch(function(erro) {
                if (error.response) {
                    toastr.error(error.response.data.message);
                } else {
                    toastr.error('error al buscar usuario');
                }
            })


    }

    function guardar() {
        $('#modal-agregar').modal('hide');
        toastr.success('Registrado correctamente');
    }

    // fin funciones para agregar al usuario


    /*  document.getElementById('formulario-editar').addEventListener('submit', function (evento) {
         evento.preventDefault();
         actualizar();
     }); */





    function modalEditar(id) {
        $('#modal-editar').modal('show')
    }

    function actualizar() {
        $('#modal-editar').modal('hide');
        toastr.success('Actualizado correctamente');
    }

    function confirmarEliminar(id) {
        Swal.fire({
            title: '¿Está seguro?',
            text: "Este cambio no se puede deshacer!",
            icon: 'error',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: '<i class="far fa-trash-alt"></i> Si, eliminar!',
            cancelButtonText: '<i class="far fa-window-close"></i> Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                toastr.success('Eliminado correctamente')
            }
        })
    }
</script>
<?php
$this->endSection('javascript');
?>
<!-- inicio de javascript del body y del html  -->