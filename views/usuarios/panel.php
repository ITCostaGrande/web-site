<div class="col-xs-12 centrado">

    <h2 align="center">Panel de Control </h2>
    <hr class="divisor">
    <br>
    <h3>Bienvenido <?php
                    echo $row['nombre'] . " " . $row['apaterno'] . " " . $row['amaterno'];
                    ?>
    </h3>
    <table width="864" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td width="167">Haz iniciado Sesión Como:</td>
            <td width="283">

                <?php

                if ($row['nivel'] == "Administrador") {
                    echo "<p><b>Administrador</b></p>";
                } else if ($row['nivel'] == "Recursos Financieros") {
                    echo "<b><p>Recursos Financieros</b></p>";
                } else if ($row['nivel'] == "Servicios Escolares") {
                    echo "<b><p>Servicios Escolares</b></p>";
                } else if ($row['nivel'] == "Subdireccion") {
                    echo "<b><p>Subdirección</b></p>";
                } else if ($row['nivel'] == "Comunicacion") {
                    echo "<b><p>Comunicación</b></p>";
                } else if ($row['nivel'] == 'Recursos Humanos') {
                    echo '<b><p>Recursos Humanos</p></b>';
                } else {
                    echo "<b><p>Estudiante</b></p>";
                }
                ?>
            </td>
            <!-- <td width="414">
                <div align="right">
                    <p><a href="/usuarios/logout">Cerrar Sesión<img src="../img_menu/exit.jpg" width="74" height="70" border="0" /></a></p>
                </div>
            </td> -->
        </tr>
    </table>


    <p>&nbsp;</p>
    <table width="770" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td>
                <p align="center"><a href="/usuarios/mostrar"><img src="../img_menu/usuarios.jpg" alt="Usuarios" width="197" height="162" border="0" /></a></p>
                <p align="center" class="Estilo2">Usuarios</p>
            </td>
            <td>
                <div align="center">
                    <p><a href="/boletines/mostrar"><img src="../img_menu/boletin.jpg" alt="catalogos" width="212" height="166" border="0" /></a></p>
                    <p align="center" class="Estilo2">Boletines</p>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div align="center">
                    <p><a href="/sliders/mostrar"><img src="../img_menu/slider.jpg" width="280" height="166" border="0" /></a></p>
                    <p><span class="Estilo2">Sliders</span></p>
                </div>
            </td>
            <td>
                <div align="center"><a href="#"><img src="../img_menu/encuesta.jpg" width="280" height="166" border="0" /></a></div>
            </td>
        </tr>
    </table>
    <p>&nbsp;</p>

</div>