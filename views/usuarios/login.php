<?php
// while($prop = $propiedades->fetch_assoc()){
//     var_dump($prop);
//     echo '<br>';
// }

?>
<div class="centrado col-xs-12">
    <table width="292" border="1" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td>
                <h1 align="center">Iniciar Sesión</h1>
                <h1 align="center"><img src="../img/muchas/logotec.png" width="80" height="78" /> </h1>
                <form name="miform" action="procesos/procesa_login.php" method="POST">
                    <div align="center"><br />
                        Login:
                        <br />
                        <input type="text" name="login">
                        <br />
                        Password:
                        <br />
                        <input type="password" name="pass">
                        <br />
                        <br />
                        <input class="boton" type="submit" value="Entrar">
                    </div>
                </form>

                <p align="right">&nbsp;</p>
            </td>
        </tr>
        <tr>
            <td></td>
        </tr>
    </table>


    <table width="257" border="1" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td width="128"><a href="../sse/alta.php" target="_self">Registrate</a></td>
            <td width="123"><a href="/" target="_self">Página Principal </a></td>
        </tr>
    </table>


</div>