<?=$cabecera;?>

    Formulario editar libro

    <div class="card">
    <div class="card-body">
        <h4 class="card-title">Ingresar datos del libro</h4>
        <p class="card-text">

        <form action="<?=site_url('/actualizar')?>" method="post" enctype="multipart/form-data">
            <div class="form-group">

                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" id="nombre" value="<?=$libro['nombre']?>"
                    class="form-control" placeholder="Ingrese el nombre del libro" 
                    aria-describedby="helpId">

                <input type="hidden" name="id" value="<?=$libro['id']?>">
            </div>
            <br>
            <div class="form-group">
                <label for="imagen" class="form-label">Cargar Imagen:</label>
                <br>
                <img src="<?=base_url()?>/uploads/<?=$libro['imagen'];?>" 
                                    class="img-thumbnail" alt="" width="100">

                <br>
                <input type="file" class="form-control" name="imagen" id="imagen" placeholder="" aria-describedby="fileHelpId">
                <br>
            </div>

            <button type="submit" class="btn btn-success">Actualizar</button>
                <a href="<?=base_url('listar');?>" class="btn btn-info">Cancelar</a>

        </form>
        </p>
    </div>
</div>

<?=$pie;?>