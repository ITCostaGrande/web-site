<div class="col-xs-12 centrado">
    <h2>Modificar un Slider</h2>
    <hr class="divisor">
    <br>
    <button type="button" class="btn btn-primary"><a href="/sliders/mostrar">Mostrar todos</a></button>
    <button type="button" class="btn btn-primary"><a href="/usuarios/panel">Panel de control</a></button>


    <form name="agregar-boletin" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="no">No. de Slider: </label> <br>
            <input type="text" name="no" required value="<?php echo $row['NSliders'];?>"> 
        </div>
        <div class="form-group">
            <label for="titulo">Título</label> <br>
            <input type="text" name="titulo" required value="<?php echo $row['Titulo'];?>"> 
        </div>

        <div class="form-group">
            <label for="final">Fecha de expiración: </label> <br>
            <input type="date" name="final" value="<?php echo $row['FFinal'];?>">
        </div>
        <div class="form-group">
            <label for="foto">Primera Foto</label> <br>
            <input type="file" name="foto1" accept="image/jpeg, image/png" >
        </div>
        <div class="form-group">
            <label for="archivo">Archivo</label> <br>
            <input type="file" name="archivo" accept="image/jpeg, image/png, .pdf, .docx ">
        </div>
        <div class="form-group">
            <label for="url">URL</label> <br>
            <input type="text" name="url"value=" <?php echo $row['Url'] ?> ">
        </div>
        <div class="form-group">
            <label for="estado">Estado</label> <br>
            <select name ="estado" >
                <option value="">--Selecciona una opción--</option>
                <option value="Activo" <?php echo ($row['Estado'] === 'Activo' )? 'selected' : '';?>>Activo</option>
                <option value="Inactivo" <?php echo ($row['Estado'] === 'Inactivo') ? 'selected' : '';?>>Inactivo</option>
            </select>
        </div>
        
        <input type="submit" value="Actualizar Boletín">

    </form>

</div>

        
           
           