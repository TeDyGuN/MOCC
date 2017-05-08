<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reportes</title>
    <!-- Toastr style -->
    <link href="css/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="css/jquery.gritter.css" rel="stylesheet">

</head>
<body>
<div class="" style="margin-bottom: 15px; margin-right: 20px">
        <pre>PLATAFORMA DE EDUCACION VIRTUAL
            AXEZO
     COCHABAMBA - BOLIVIA
        </pre>
</div>
<h2 align="center">Reporte de Instituciones</h2>
<div class="table table-striped" align="center">
    <table border=1 cellspacing=0 align="center">
        <tr>
            <th class="success" width="20%">Nombres.</th>
            <th class="success" width="20%">Direccion</th>
            <th class="success" width="20%">Telefono</th>
            <th class="success" width="20%">Email</th>
            <th class="success" width="20%">Web</th>
        </tr>
        <?php foreach($docentes as $d): ?>
        <tr align="center">
            <td class=" text-center"> <?php echo ($d->nombre); ?></td>
            <td class=" text-center"> <?php echo ($d->direccion); ?></td>
            <td class=" text-center"> <?php echo ($d->telefono); ?></td>
            <td class=" text-center"> <?php echo ($d->email); ?></td>
            <td class=" text-center"> <?php echo ($d->web); ?></td>
        </tr>
        <?php endforeach; ?>

    </table>
</div>
<br><br><br>
<div style="margin-bottom: 50px">
    <p>&nbsp;</p>
    <pre>
    <p>&nbsp;</p>
                ----------------------------------
        <?php echo "            Cristofer Ortiz Florez" ?>
        <br>
        <?php echo "                DIRECTOR" ?>

    </pre>
</div>

<?php
date_default_timezone_set('America/La_Paz');
$hoy = getdate();
echo("<pre>");
echo("<p>");
echo("Reporte Generado en Fecha: ".$hoy['mday']."/".$hoy['mon']."/".$hoy['year']."     ".$hoy['hours'].":".$hoy['minutes'].":".$hoy['seconds']);
echo("</p>");
echo("</pre>");
?>
</body>
</html>