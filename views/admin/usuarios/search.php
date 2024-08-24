<div class="card">
    <div class="card-header">
        <h3 class="card-title">Resultado de búsqueda</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="tabla-listado" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Nombre Completo</th>
                    <th>Email</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $usuario): ?>
                    <tr>
                        <td><?php echo $usuario->nombre_completo ?></td>
                        <td><?php echo $usuario->email ?></td>
                        <td>
                            <button onclick="modalEditar(<?php echo $usuario->id ?>)" class="btn btn-warning">Editar</button>
                            <button onclick="confirmarEliminar(<?php echo $usuario->id ?>)" class="btn btn-danger">Eliminar</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>Nombre Completo</th>
                    <th>Email</th>
                    <th>Opciones</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->

<script>
    $('#tabla-listado').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
/*         "columnDefs": [{
            targets: 4,
            orderable: false,
            searchable: false
        }] */
    });
</script>