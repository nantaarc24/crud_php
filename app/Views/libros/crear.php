<?= $cabecera ?>

Formulario crear libro

<div class="card">
    <div class="card-body">
        <h4 class="card-title">Ingresar datos del libro</h4>
        <p class="card-text">

        <form action="<?=site_url('/guardar')?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" value="<?=old('nombre')?>"
                    placeholder="Ingrese el nombre del libro" aria-describedby="helpId">
            </div>

            <div class="form-group">
                <label for="imagen" class="form-label">Cargar Imagen:</label>
                <input type="file" class="form-control" name="imagen" id="imagen" placeholder="" aria-describedby="fileHelpId">
            </div>

            <button type="submit" class="btn btn-success">Guardar</button>
            <a href="<?=base_url('listar');?>" class="btn btn-info">Cancelar</a>

        </form>
        </p>
    </div>
</div>

<?= $pie ?>