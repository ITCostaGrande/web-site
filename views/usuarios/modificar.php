<div class=" col-xs-12 centrado">
    <h2>Modificar Usuario</h2>
    <hr class="divisor">
    <br>
    <button type="button" class="btn btn-primary"><a href="/usuarios/mostrar">Mostrar todos</a></button>
    <button type="button" class="btn btn-primary"><a href="/usuarios/panel">Panel de control</a></button>
    <form method="post" name="form1" id="modificar_usuario">
        <table align="center">
            <tr valign="baseline">
                <td nowrap align="right">IdUsuario:</td>
                <td><?php echo $row_Recordset1['IdUsuario']; ?></td>
            </tr>
            <tr valign="baseline">
                <td nowrap align="right">Login:</td>
                <td><input type="text" name="login" value="<?php echo $row_Recordset1['login']; ?>" size="32"></td>
            </tr>
            <tr valign="baseline">
                <td nowrap align="right">Nombre:</td>
                <td><input type="text" name="nombre" value="<?php echo $row_Recordset1['nombre']; ?>" size="32"></td>
            </tr>
            <tr valign="baseline">
                <td nowrap align="right">Apaterno:</td>
                <td><input type="text" name="apaterno" value="<?php echo $row_Recordset1['apaterno']; ?>" size="32"></td>
            </tr>
            <tr valign="baseline">
                <td nowrap align="right">Amaterno:</td>
                <td><input type="text" name="amaterno" value="<?php echo $row_Recordset1['amaterno']; ?>" size="32"></td>
            </tr>
            <tr valign="baseline">
                <td nowrap align="right">Password:</td>
                <td><input type="text" name="password" value="<?php echo $row_Recordset1['password']; ?>" size="32"></td>
            </tr>
            <tr valign="baseline">
                <td nowrap align="right">Email:</td>
                <td><input type="text" name="email" value="<?php echo $row_Recordset1['email']; ?>" size="32"></td>
            </tr>
            <tr valign="baseline">
                <td nowrap align="right">Nivel:</td>
                <td>
                    <select name="nivel">
                        <option value="Administrador">Administrador</option>
                        <option value="Recursos Humanos">Recursos Humanos</option>
                        <option value="Vinculacion">Gestión y Vinculación</option>
                        <option value="Comunicacion">Comunicación</option>
                    </select>

                </td>
            </tr>
            <tr valign="baseline">
                <td nowrap align="right">&nbsp;</td>
                <td><input type="submit" value="Actualizar registro"></td>
            </tr>
        </table>
        <input type="hidden" name="MM_update" value="form1">
        <input type="hidden" name="IdUsuario" value="<?php echo $row_Recordset1['IdUsuario']; ?>">
    </form>
</div>