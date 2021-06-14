<div class="col-xs-12 centrado">
    <h2>Agregar un Slider</h2>
    <hr class="divisor">
    <br>
    <button type="button" class="btn btn-primary"><a href="/sliders/mostrar">Mostrar todos</a></button>
    <button type="button" class="btn btn-primary"><a href="/usuarios/panel">Panel de control</a></button>


    <form name="agregar-boletin" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="no">No. de Slider: </label> <br>
            <input type="text" name="no" required > 
        </div>
        <div class="form-group">
            <label for="titulo">Título</label> <br>
            <input type="text" name="titulo" required > 
        </div>

        <div class="form-group">
            <label for="final">Fecha de expiración: </label> <br>
            <input type="date" name="final" >
        </div>
        <div class="form-group">
            <label for="foto">Slider</label> <br>
            <input type="file" name="foto1" accept="image/jpeg, image/png" >
        </div>
        <div class="form-group">
            <label for="archivo">Archivo</label> <br>
            <input type="file" name="archivo" accept="image/jpeg, image/png, .pdf, .docx ">
        </div>
        <div class="form-group">
            <label for="url">URL</label> <br>
            <input type="text" name="url"value=" ">
        </div>
        <div class="form-group">
            <label for="estado">Estado</label> <br>
            <select name ="estado" >
                <option value="" selected>--Selecciona una opción--</option>
                <option value="Activo" >Activo</option>
                <option value="Inactivo">Inactivo</option>
            </select>
        </div>
        
        <input type="submit" value="Actualizar Boletín">

    </form>

</div>
