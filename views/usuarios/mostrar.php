<div class="centrado">
    <h2>Listado de todos los usuarios</h2>
    <hr class="divisor">
    <br>
    <a href="/usuarios/agregar">Agregar Usuario </a><br>
    <a href="/usuarios/panel" target="_self">Panel de Control</a>
</div>

<div class="col-xs-12 centrado">

    <table width="728" border="1" align="center" cellpadding="0" cellspacing="0">
        <tr bgcolor="#0099CC">
            <td> Usuario </td>
            <td width="50"> Nombre </td>
            <td> Password </td>
            <td> Email </td>
            <td> Area </td>
            <td>Editar</td>
            <td>Eliminar</td>
        </tr>
        <?php while ($prop = $propiedades->fetch_assoc()) { ?>
            <tr class="brillo">
                <td><?php echo $prop['login']; ?></td>
                <td><?php echo $prop['Nombre']; ?> <?php echo $prop['apaterno']; ?> <?php echo $prop['amaterno']; ?></td>
                <td><?php echo $prop['password']; ?></td>
                <td><?php echo $prop['email']; ?></td>
                <td><?php echo $prop['nivel']; ?></td>
                <td>
                    <div align="center"><a href="/usuarios/modificar?recordID=<?php echo $prop['IdUsuario']; ?>"><img src="../img_menu/editar.png" width="47" height="48" /></a></div>
                </td>
                <td>
                    <div align="center"><a href="/usuarios/eliminar?recordID=<?php echo $prop['IdUsuario']; ?>" onclick="if(confirm('¿Realmente deseas eliminarlo?')==false){return false;}"><img src="../img_menu/eliminar.gif" width="30" height="30" border="0" /></a></div>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>