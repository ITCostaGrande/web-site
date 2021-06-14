<div class="col-xs-12 centrado">
    <h2>Listado de todos los Sliders</h2>
    <hr class="divisor">
    <br>
    <a href="/sliders/agregar">Agregar Slider</a>
    <br>
    <a href="/usuarios/panel">Regresar al Panel de Control</a>

    <table width="934" border="1" align="center" cellpadding="0" cellspacing="0">
        <tr bgcolor="#0099CC">
            <td width="30" rowspan="2">
                <div align="center"><strong>No.</strong></div>
            </td>
            <td width="30" rowspan="2"><strong>Estado</strong></td>
            <td width="125" rowspan="2">
                <div align="center"><strong>Imagen</strong></div>
            </td>
            <td width="254" rowspan="2" bgcolor="#0099CC">
                <div align="center"><strong>Titulo</strong></div>
            </td>
            <td colspan="2">
                <div align="center"><strong>PUBLICACI&Oacute;N</strong></div>
            </td>
            <td width="64" rowspan="2">
                <div align="center"><strong>Editar</strong></div>
            </td>
            <td width="64" rowspan="2">
                <div align="center"><strong>Ver Detalles</strong></div>
            </td>
            <td width="111" rowspan="2">
                <div align="center"><strong>Eliminar</strong></div>
            </td>
        </tr>
        <tr bgcolor="#0099CC">
            <td width="110"> Fecha Ingreso </td>
            <td width="106">Fecha Final </td>
        </tr>

        <?php
        while ($row = $propiedades->fetch_assoc()) { ?>

            <tr class="brillo">
                <td width="30"><?php echo $row['NSliders']; ?></td>

                <td width="30"><?php
                                if ($row['Estado'] === "Activo") { ?>
                        <img src="../img_menu/activo.jpg" />
                    <?php   } else { ?> <img src="../img_menu/inactivo.jpg" /> <?php } ?>
                </td>

                <td width="125"><a href="/sliders/propiedades?recordID=<?php echo $row['Id']; ?>" onclick="valida();"><img src="../sliders_save/<?php echo $row['Imagen']; ?>" width="130" height="120" border="1" /></a></td>

                <td><?php echo $row['Titulo']; ?></td>
                <td>
                    <div align="center">
                        <?php echo $row['FIngreso']; ?>
                    </div>
                </td>
                <td>
                    <div align="center">
                        <?php echo $row['FFinal']; ?>
                    </div>
                </td>

                <td>
                    <div align="center"><a href="/sliders/modificar?recordID=<?php echo $row['Id']; ?>"><img src="../img_menu/editar.png" width="47" height="48" /></a></div>
                </td>
                <td>
                    <div align="center"><a href="/sliders/propiedades?recordID=<?php echo $row['Id']; ?>" onclick="valida();"><img src="../img_menu/ver.jpg" width="47" height="48" /></a>
                    </div>
                <td width="125">
                    <div align="center"><a href="/sliders/eliminar?recordID=<?php echo $row['Id']; ?>" onclick="if(confirm('¿Realmente deseas eliminarlo?')==false){return false;}"><img src="../img_menu/eliminar.gif" width="30" height="30" border="0" /></a></div>
                </td>
            </tr>
        <?php } ?>
    </table>



</div>