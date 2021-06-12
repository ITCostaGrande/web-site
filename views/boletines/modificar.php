<div class="col-xs-12 centrado">
    <h2>Modificar un Boletín</h2>
    <hr class="divisor">
    <br>
    <button type="button" class="btn btn-primary"><a href="/boletines/mostrar">Mostrar todos</a></button>
    <button type="button" class="btn btn-primary"><a href="/usuarios/panel">Panel de control</a></button>


    <form name="agregar-boletin" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="no">No. de Boletín: </label> <br>
            <input type="text" name="no" required value="<?php echo $row['Nboletin'];?>"> 
        </div>
        <div class="form-group">
            <label for="titulo">Título</label> <br>
            <input type="text" name="titulo" required value="<?php echo $row['Titulo'];?>"> 
        </div>

        <div class="form-group">
            <label for="desc-breve">Descripción breve</label> <br>
            <textarea name="desc-breve" cols="30" rows="5" required><?php echo $row['DescBreve'];?></textarea>
        </div>

        <div class="form-group">
            <label for="desc-completa">Descripción Completa: </label> <br>
            <textarea name="desc-completa" cols="30" rows="10" required><?php echo $row['DescCompleta'];?></textarea>
        </div>
        <div class="form-group">
            <label for="final">Fecha de expiración: </label> <br>
            <input type="date" name="final" value="<?php echo $row['FFinal'];?>">
        </div>
        <div class="form-group">
            <label for="foto1">Primera Foto</label> <br>
            <input type="file" name="foto1" accept="image/jpeg, image/png" >
        </div>
        <div class="form-group">
            <label for="foto2">Segunda Foto</label> <br>
            <input type="file" name="foto2" accept="image/jpeg, image/png">
        </div>
        
        <input type="submit" value="Actualizar Boletín">

    </form>

</div>

        
           
           