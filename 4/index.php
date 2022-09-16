<?php
    $cifrar = $_GET["cifrar"];
    $salt = $_GET["salt"];
    require_once("cifrado.php");
    $obj = new cifrado();
    $obj->setCifrar("$cifrar");
    $obj->setSalt("$salt");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Programa 4</title>
</head>
<body>
    <div class="container-xxl">
        <br></br>
        <h2>Cifrado de Texto</h2>
        
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Contraseña a Cifrar</th>
                        <th scope="col"><?php echo $cifrar ?></th>
                    </tr>
                </thead>
                <tbody>
                   <tr>
                      <th scope = "row">Salt</th>
                      <th><?php echo $salt ?></th>  
                   </tr>
                   <tr>
                      <?php echo $obj->Mostrar() ?>
                   </tr>
                   <tr>
                      <?php echo $obj->Mostrar2() ?>
                   </tr>
                   <tr>
                      <?php echo $obj->Mostrar3() ?>
                   </tr>
                   <tr>
                      <?php echo $obj->Mostrar4() ?>
                   </tr>
                   <tr>
                      <?php echo $obj->Mostrar5() ?>
                   </tr>
                   <tr>
                      <?php echo $obj->Mostrar6() ?>
                   </tr>
                   <tr>
                      <?php echo $obj->Mostrar7() ?>
                   </tr>
                   <tr>
                      <?php echo $obj->Mostrar8() ?>
                   </tr>
                   <tr>
                      <?php echo $obj->Mostrar9() ?>
                   </tr>
                   <tr>
                      <?php echo $obj->Mostrar10() ?>
                   </tr>
                   <tr>
                      <?php echo $obj->Mostrar11() ?>
                   </tr>
                </tbody>
            </table>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>