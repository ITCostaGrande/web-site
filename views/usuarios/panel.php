<body>

    <h1 align="center">Panel de Control </h1>
    <h2>Bienvenido <?php 
    //echo $_SESSION["nombre"] . " " . $_SESSION["apaterno"] . " " . $_SESSION["amaterno"]; 
    ?>
    </h2>
    <table width="864" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td width="167">Haz iniciado Sesión Como:</td>
            <td width="283">

                <?php
                //if ($_SESSION["nivel"] == "Administrador") {
                  //  echo "<p><b>Administrador</b></p>";
                //} else if ($_SESSION["nivel"] == "Recursos Financieros") {
                    //echo "<b><p>Recursos Financieros</b></p>";
                //} else if ($_SESSION["nivel"] == "Servicios Escolares") {
                    //echo "<b><p>Servicios Escolares</b></p>";
                //} else if ($_SESSION["nivel"] == "Subdireccion") {
                    //echo "<b><p>Subdirección</b></p>";
                //} else {
                    //echo "<b><p>Estudiante</b></p>";
                //}
                ?>
                </td>
            <td width="414">
                <div align="right">
                    <p><a href="logout.php">Cerrar Sesión<img src="../img_menu/exit.jpg" width="74" height="70" border="0" /></a></p>
                </div>
            </td>
        </tr>
    </table>


    <p>&nbsp;</p>
    <table width="770" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td>
                <p align="center"><a href="../consulta_usuarios.php"><img src="../img_menu/usuarios.jpg" alt="Usuarios" width="197" height="162" border="0" /></a></p>
                <p align="center" class="Estilo2">Usuarios</p>
            </td>
            <td>
                <div align="center">
                    <p><a href="../consulta_boletin.php"><img src="../img_menu/boletin.jpg" alt="catalogos" width="212" height="166" border="0" /></a></p>
                    <p align="center" class="Estilo2">Boletines</p>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div align="center">
                    <p><a href="../consulta_sliders.php"><img src="../img_menu/slider.jpg" width="280" height="166" border="0" /></a></p>
                    <p><span class="Estilo2">Sliders</span></p>
                </div>
            </td>
            <td>
                <div align="center"><a href="../../sse/busqueda.php"><img src="../../sse/img/encuesta.jpg" width="280" height="166" border="0" /></a></div>
            </td>
        </tr>
    </table>
    <p>&nbsp;</p>

</body>