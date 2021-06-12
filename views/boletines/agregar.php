<div class="col-xs-12 centrado">
    <h2>Agregar Boletín</h2>
    <hr class="divisor">
    <br>

    <form name="agregar-boletin" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="no">No. de Boletín: </label> <br>
            <input type="text" name="no" required> 
        </div>
        <div class="form-group">
            <label for="titulo">Título</label> <br>
            <input type="text" name="titulo" required> 
        </div>

        <div class="form-group">
            <label for="desc-breve">Descripción breve</label> <br>
            <textarea name="desc-breve" cols="30" rows="5" required></textarea>
        </div>

        <div class="form-group">
            <label for="desc-completa">Descripción Completa: </label> <br>
            <textarea name="desc-completa" cols="30" rows="10" required></textarea>
        </div>
        <div class="form-group">
            <label for="final">Fecha de expiración: </label> <br>
            <input type="date" name="final">
        </div>
        <div class="form-group">
            <label for="foto1">Primera Foto</label> <br>
            <input type="file" name="foto1" accept="image/jpeg, image/png" >
        </div>
        <div class="form-group">
            <label for="foto2">Segunda Foto</label> <br>
            <input type="file" name="foto2" accept="image/jpeg, image/png">
        </div>
        
        <input type="submit" value="Crear Boletín">

    </form>



</div>