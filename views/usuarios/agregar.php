<div class="col-xs-12 centrado">
    <h2>Formulario para crear un nuevo usuario</h2>
    <hr class="divisor">
    <br>
    <button type="button" class="btn btn-primary"><a href="/usuarios/mostrar">Mostrar todos</a></button>
    <button type="button" class="btn btn-primary"><a href="/usuarios/panel">Panel de control</a></button>
    <p align="center" class="Estilo1">Agregar Usuario </p>
    <table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td>
                <form name="user_form" action="/usuarios/agregar" method="POST">
                    Nombre de Usuario(nick):<br />
                    <input type="text" name="login" size="30" maxlength="100" />
                    <br /> Contraseña:
                    <br />
                    <input type="password" name="pass1" />
                    <br />Repite Contraseña:
                    <br />
                    <input type="password" name="pass2" />
                    <br />Nombre:
                    <br />
                    <input type="text" name="nombre" size="30" maxlength="100" />
                    <br />
                    Apellido Paterno:
                    <br />
                    <input type="text" name="apaterno" size="30" maxlength="100" />
                    <br />Apellido Materno:
                    <br />
                    <input type="text" name="amaterno" size="30" maxlength="100" />
                    <br />E-mail:
                    <br />
                    <input type="text" name="email" size="30" maxlength="100" />
                    <br />Nivel del Usuario:
                    <br />
                    <select name="nivel">
                        <option value="Administrador">Administrador</option>
                        <option value="Recursos Humanos">Recursos Humanos</option>
                        <option value="Vinculación">Gestión y Vinculación</option>
                        <option value="Comunicación">Comunicacion</option>
                    </select>
                    <br />
                    <br />
                    <input type="submit" name="crear" value="Crear Usuario" />
                </form>
            </td>
        </tr>
    </table>


</div>