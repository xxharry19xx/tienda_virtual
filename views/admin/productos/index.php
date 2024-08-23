<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en" xmlns:mso="urn:schemas-microsoft-com:office:office" xmlns:msdt="uuid:C2F41010-65B3-11d1-A29F-00AA00C14882">

<head>
    <base href="/">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Productos | Tienda Virtual</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">

<!--[if gte mso 9]><xml>
<mso:CustomDocumentProperties>
<mso:display_urn_x003a_schemas-microsoft-com_x003a_office_x003a_office_x0023_SharedWithUsers msdt:dt="string">Integrantes de la TIENDA VIRTUAL G14</mso:display_urn_x003a_schemas-microsoft-com_x003a_office_x003a_office_x0023_SharedWithUsers>
<mso:SharedWithUsers msdt:dt="string">28;#Integrantes de la TIENDA VIRTUAL G14</mso:SharedWithUsers>
</mso:CustomDocumentProperties>
</xml><![endif]-->
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/" class="nav-link">Ir al inicio</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#" role="button">
                        <i class="fas fa-sign-out-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="dashboard.html" class="brand-link">
                <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">Tienda Virtual</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Alexander Pierce</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="dashboard.html" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Productos
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="crud.html" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Categorías</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="crud.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Sub categorías</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="crud.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Medidas</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="crud.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Marcas</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="crud.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Productos</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Personas
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="crud.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Clientes</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="crud.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Proveedores</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="crud.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Productos</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Perfil
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Productos</h1>
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
                                    <h5 class="m-0">Búsqueda de Productos</h5>
                                </div>
                                <div class="card-body">
                                    <form id="formulario-busqueda" class="form-inline">
                                        <label class="my-1 mr-2" for="busqueda">Nombre</label>
                                        <input type="text" class="form-control my-1 mr-sm-2" id="busqueda" name="busqueda" placeholder="Ingrese nombre de producto">
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
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Resultado de búsqueda</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Apellido paterno</th>
                                                <th>Apellido materno</th>
                                                <th>Nombres</th>
                                                <th>Fecha de nacimiento</th>
                                                <th>Opciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Trident</td>
                                                <td>Internet
                                                    Explorer 4.0
                                                </td>
                                                <td>Win 95+</td>
                                                <td> 4</td>
                                                <td>
                                                    <button onclick="modalEditar(1)"
                                                        class="btn btn-warning">Editar</button>
                                                    <button onclick="confirmarEliminar(1)"
                                                        class="btn btn-danger">Eliminar</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Trident</td>
                                                <td>Internet
                                                    Explorer 5.0
                                                </td>
                                                <td>Win 95+</td>
                                                <td>5</td>
                                                <td>
                                                    <button onclick="modalEditar(1)"
                                                        class="btn btn-warning">Editar</button>
                                                    <button onclick="confirmarEliminar(1)"
                                                        class="btn btn-danger">Eliminar</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Trident</td>
                                                <td>Internet
                                                    Explorer 5.5
                                                </td>
                                                <td>Win 95+</td>
                                                <td>5.5</td>
                                                <td>
                                                    <button onclick="modalEditar(1)"
                                                        class="btn btn-warning">Editar</button>
                                                    <button onclick="confirmarEliminar(1)"
                                                        class="btn btn-danger">Eliminar</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Trident</td>
                                                <td>Internet
                                                    Explorer 6
                                                </td>
                                                <td>Win 98+</td>
                                                <td>6</td>
                                                <td>
                                                    <button onclick="modalEditar(1)"
                                                        class="btn btn-warning">Editar</button>
                                                    <button onclick="confirmarEliminar(1)"
                                                        class="btn btn-danger">Eliminar</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Trident</td>
                                                <td>Internet Explorer 7</td>
                                                <td>Win XP SP2+</td>
                                                <td>7</td>
                                                <td>
                                                    <button onclick="modalEditar(1)"
                                                        class="btn btn-warning">Editar</button>
                                                    <button onclick="confirmarEliminar(1)"
                                                        class="btn btn-danger">Eliminar</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Trident</td>
                                                <td>AOL browser (AOL desktop)</td>
                                                <td>Win XP</td>
                                                <td>6</td>
                                                <td>
                                                    <button onclick="modalEditar(1)"
                                                        class="btn btn-warning">Editar</button>
                                                    <button onclick="confirmarEliminar(1)"
                                                        class="btn btn-danger">Eliminar</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Gecko</td>
                                                <td>Firefox 1.0</td>
                                                <td>Win 98+ / OSX.2+</td>
                                                <td>1.7</td>
                                                <td>
                                                    <button onclick="modalEditar(1)"
                                                        class="btn btn-warning">Editar</button>
                                                    <button onclick="confirmarEliminar(1)"
                                                        class="btn btn-danger">Eliminar</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Gecko</td>
                                                <td>Firefox 1.5</td>
                                                <td>Win 98+ / OSX.2+</td>
                                                <td>1.8</td>
                                                <td>
                                                    <button onclick="modalEditar(1)"
                                                        class="btn btn-warning">Editar</button>
                                                    <button onclick="confirmarEliminar(1)"
                                                        class="btn btn-danger">Eliminar</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Gecko</td>
                                                <td>Firefox 2.0</td>
                                                <td>Win 98+ / OSX.2+</td>
                                                <td>1.8</td>
                                                <td>
                                                    <button onclick="modalEditar(1)"
                                                        class="btn btn-warning">Editar</button>
                                                    <button onclick="confirmarEliminar(1)"
                                                        class="btn btn-danger">Eliminar</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Gecko</td>
                                                <td>Firefox 3.0</td>
                                                <td>Win 2k+ / OSX.3+</td>
                                                <td>1.9</td>
                                                <td>
                                                    <button onclick="modalEditar(1)"
                                                        class="btn btn-warning">Editar</button>
                                                    <button onclick="confirmarEliminar(1)"
                                                        class="btn btn-danger">Eliminar</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Gecko</td>
                                                <td>Camino 1.0</td>
                                                <td>OSX.2+</td>
                                                <td>1.8</td>
                                                <td>
                                                    <button onclick="modalEditar(1)"
                                                        class="btn btn-warning">Editar</button>
                                                    <button onclick="confirmarEliminar(1)"
                                                        class="btn btn-danger">Eliminar</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Gecko</td>
                                                <td>Camino 1.5</td>
                                                <td>OSX.3+</td>
                                                <td>1.8</td>
                                                <td>
                                                    <button onclick="modalEditar(1)"
                                                        class="btn btn-warning">Editar</button>
                                                    <button onclick="confirmarEliminar(1)"
                                                        class="btn btn-danger">Eliminar</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Gecko</td>
                                                <td>Netscape 7.2</td>
                                                <td>Win 95+ / Mac OS 8.6-9.2</td>
                                                <td>1.7</td>
                                                <td>
                                                    <button onclick="modalEditar(1)"
                                                        class="btn btn-warning">Editar</button>
                                                    <button onclick="confirmarEliminar(1)"
                                                        class="btn btn-danger">Eliminar</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Apellido paterno</th>
                                                <th>Apellido materno</th>
                                                <th>Nombres</th>
                                                <th>Fecha de nacimiento</th>
                                                <th>Opciones</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->

                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Slogan
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> Todos los
            derechos reservados.
        </footer>
    </div>
    <!-- ./wrapper -->

    <div class="modal fade" id="modal-agregar" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" id="modal-agregar-contenido">
                <div class="modal-header">
                    <h4 class="modal-title">Registrar persona</h4>
                </div>
                <form action="" id="formulario-crear" autocomplete="off">
                    <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label" for="apellido_paterno">Apellido paterno</label>
                            <div class="col-sm-8">
                                <input type="text" name="apellido_paterno" id="apellido_paterno" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label" for="apellido_materno">Apellido materno</label>
                            <div class="col-sm-8">
                                <input type="text" name="apellido_materno" id="apellido_materno" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label" for="nombres">Nombres</label>
                            <div class="col-sm-8">
                                <input type="text" name="nombres" id="nombres" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label" for="fecha_nacimiento">Fecha de nacimiento</label>
                            <div class="col-sm-8">
                                <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i
                                class="fas fa-window-close"></i> Cerrar
                        </button>
                        <button id="btn-submit" type="submit" class="btn btn-primary"><i class="fas fa-save"></i>
                            Registrar</button>
                    </div>
                </form>
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
                        <button id="btn-submit" type="submit" class="btn btn-primary"><i class="fas fa-save"></i>
                            Actualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- Toastr -->
    <script src="plugins/toastr/toastr.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>

        document.getElementById('formulario-busqueda').addEventListener('submit', function(evento){
            // desactiva el evento submit para que no se este recargando la pagina 
            evento.preventDefault();
            search();
        });

        function search(){
            const busqueda = document.getElementById('busqueda').value;
            const url = '/admin/productos/search?busqueda=' + busqueda;
            axios.get(url);
        }


        $(function () {
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
                "columnDefs": [
                    { targets: 4, orderable: false, searchable: false }
                ]
            });
        });

        document.getElementById('formulario-crear').addEventListener('submit', function (evento) {
            evento.preventDefault();
            guardar();
        });

        document.getElementById('formulario-editar').addEventListener('submit', function (evento) {
            evento.preventDefault();
            actualizar();
        });

        function modalCrear() {
            $('#modal-agregar').modal('show');
        }

        function guardar() {
            $('#modal-agregar').modal('hide');
            toastr.success('Registrado correctamente');
        }

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
</body>

</html>