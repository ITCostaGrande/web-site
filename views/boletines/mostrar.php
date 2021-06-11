<div class="col-xs-12 centrado">
    <h2>Todos los Boletines</h2>
    <hr class="divisor">
    <br>

    <table width="934" border="1" align="center" cellpadding="0" cellspacing="0">
        <tr bgcolor="#0099CC">
            <td width="30" rowspan="2">
                <div align="center"><strong>No.</strong></div>
            </td>
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

        <?php while ($row = $propiedades->fetch_assoc()) {  ?>

            <?php
            $start_date = $row["FIngreso"];
            $end_date = $row["FFinal"];
            $fecha_a_evaluar = date("Y-m-d");
            ?>

            <tr class="brillo">
                <td width="30"><?php echo $row['Nboletin']; ?></td>

                <td width="125"><a href="ver_boletin.php?recordID=<?php echo $row['Id']; ?>" onclick="valida();"><img src="../boletines_save/<?php echo $row['Foto1']; ?>" width="130" height="120" border="1" /></a></td>

                <td><?php echo $row['Titulo']; ?></td>
                <td>
                    <div align="center">
                        <?php echo $start_date; ?>
                    </div>
                </td>
                <td>
                    <div align="center">
                        <?php echo $end_date; ?>
                    </div>
                </td>

                <td>
                    <div align="center"><a href="/boletines/modificar?recordID=<?php echo $row['Id']; ?>"><img src="../img_menu/editar.png" width="47" height="48" /></a></div>
                </td>
                <td>
                    <div align="center"><a href="/boletines/propiedades?recordID=<?php echo $row['Id']; ?>" onclick="valida();"><img src="../img_menu/ver.jpg" width="47" height="48" /></a>
                    </div>
                <td width="125">
                    <div align="center"><a href="/boletines/eliminar?recordID=<?php echo $row['Id']; ?>" onclick="if(confirm('¿Realmente deseas eliminarlo?')==false){return false;}"><img src="../img_menu/eliminar.gif" width="30" height="30" border="0" /></a></div>
                </td>
            </tr>

        <?php  } ?>
    </table>


    <table border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td>
                <div align="center">


                    </p>

                </div>
            </td>
        </tr>

    </table>
</div>