<?php
include "modelos/conexion.php";
$numero=$_GET["numero"];
$sql=$conexion->query(" select * from numeraciones where numero_grupo=$numero");

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width-device-width, initial-scale-1.0">
        <title>Crud en php y mysql</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    </head>
    <body>
        <h1 class="text-center p-5">Sistema de Llamadas</h1>
        <div class="container-fluid row">
            <div class="col-12 p-4">
                <table class="table">
                    <thead class="bg-info">
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NUMERO</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">DESCRIPCION</th>
                        <th scope="col">

                        </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($datos = $sql->fetch_object()){ ?>
                            <tr>
                        <td><?= $datos->id_numeracion ?></td>
                        <td><?= $datos->numeracion ?></td>
                        <td><?= $datos->numero_grupo ?></td>
                        <td><?= $datos->descripcion ?></td>
                        <td>
                            <a href="" class="btn btn-small btn-warning"><span class="material-symbols-outlined">edit</span></a>
                            <a href="" class="btn btn-small btn-danger"><span class="material-symbols-outlined">delete</span></a>
                        </td>
                        </tr>
                        <?php }
                        ?>
                    </tbody>
                </table>
            </div>

        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>