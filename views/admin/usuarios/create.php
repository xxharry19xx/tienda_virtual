<div class="modal-header">
    <h4 class="modal-title">Registrar Usuario</h4>
</div>
<form action="" id="formulario-crear" autocomplete="off">
    <div class="modal-body">
        <div class="form-group row">
            <label class="col-sm-5 col-form-label" for="nombre_completo">Nombre Completo</label>
            <div class="col-sm-7">
                <input type="text" name="nombre_completo" id="nombre_completo" class="form-control" />
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-5 col-form-label" for="email">Correo Electronico</label>
            <div class="col-sm-7">
                <input type="email" name="email" id="email" class="form-control" />
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-5 col-form-label" for="password">Contraseña</label>
            <div class="col-sm-7">
                <input type="password" name="password" id="password" class="form-control" />
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-5 col-form-label" for="confirmar_password">Confirmar Contraseña</label>
            <div class="col-sm-7">
                <input type="password" name="confirmar_password" id="confirmar_password" class="form-control" />
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

<script>
    document.getElementById('formulario-crear').addEventListener('submit', function(evento) {
        evento.preventDefault();
        guardar();
    });
</script>