<div class="col-xs-12 centrado">
    <h2>Propiedades</h2>
    <hr class="divisor">
    <br>
    <table width=80% border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
        <tr>
            <td>
                <h3 class="Estilo22" align="center">Boletin No. <?php echo $row_Recordset['Nboletin']; ?>&nbsp;
            </td>
        </tr>
        <tr>
            <td>
                <p class="Estilo22" align="center">Titulo: <?php echo $row_Recordset['Titulo']; ?>&nbsp;
            </td>
        </tr>
        <tr>
            <td>
                <div align="center"><img src="../boletines_save/<?php echo $row_Recordset['Foto1']; ?>" /></a>&nbsp;</div>
            </td>
        </tr>
        <tr>
            <td>
                <div align="center"><img src="../boletines_save/<?php echo $row_Recordset['Foto2']; ?>" /></a>&nbsp;</div>
            </td>
        </tr>
        <tr>
            <td>
                <p class="Estilo22" align="center">Descripción Breve: <span class="Estilo1"><?php echo $row_Recordset['DescBreve']; ?>&nbsp;</span>
            </td>
        </tr>
        <tr>
            <td>
                <p class="Estilo22" align="center">Descripción Completa: <span class="Estilo1"><?php echo $row_Recordset['DescCompleta']; ?>&nbsp;</span>
            </td>
        </tr>
        <tr>
            <td>
                <p class="Estilo22" align="center">Publicado el: <span class="Estilo1"><?php echo $row_Recordset['FIngreso']; ?>&nbsp;</span>
            </td>
        </tr>
        <tr>
            <td>
                <p class="Estilo22" align="center">Finaliza el:<span class="Estilo1"> <?php echo $row_Recordset['FFinal']; ?></span>&nbsp;
            </td>
        </tr>
    </table>

</div>