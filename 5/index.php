<?php
    require_once("componentes.php");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Programa 5</title>
</head>
<body>
    <div class="container-md">
        <br></br>
        <?php echo componentes::myModal("ir a Google",
                                        "danger",
                                        "Modal para ir a Google",
                                        "Da click en el boton para abrir en el buscador",
                                        "Cerrar",
                                        "Abir google.com",
                                        "https://www.google.com");
        
        ?>
        <br></br>
        <?php echo componentes::myAlert("danger","Esta es una Alerta llamada desde una metodo estatico") ?>
        <?php echo componentes::myBadge("Titulo enviado","Metodo Estatico") ?>
        <?php echo componentes::myBreadcrumb("Index","Clase Componentes","Metodo MyBreadcrumb()") ?>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>