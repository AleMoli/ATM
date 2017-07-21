<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01
Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .table-bordered {
            width: 70%
        }
    </style>
</head>

<body>
<div class="container">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
            integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
            crossorigin="anonymous"></script>

    <table class="table table-bordered" align="center">

        <tr>
            <td>ID</td>
            <td>Capienza (Persone)</td>
            <td>Peso (Kg)</td>
            <td>Revisione</td>
            <td>Tipo</td>
            <td>Tipo Mezzo</td>
<!--            <td>Modello</td>-->
            <td>Azione</td>
        </tr>
        <tbody>
        <?php
        include "class/Mezzi.php";
        $mezzi = new Mezzi();
        $result = $mezzi->getCollection();
        if ($result > 0) {
            foreach ($result as $row) {
                ?>
                <tr>
                    <td><?php echo $row["ID"] ?></td>
                    <td><?php echo $row["capienza"] ?></td>
                    <td><?php echo $row["peso"] ?></td>
                    <td><?php echo $row["revisione"] ?></td>
                    <td><?php echo $row["tipo"] ?></td>
                    <td><?php echo $row["tipomezzo"] ?></td>
<!--                    <td>--><?php //echo $row["modello"] ?><!--</td>-->
                    <td><a href="edit.php?id=<?php echo $row['ID'] ?>"><i class="fa fa-pencil"
                                                                          aria-hidden="true"></i></a>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="delete.php?id=<?php echo $row['ID'] ?>"><i class="fa fa-trash-o"
                                                                            aria-hidden="true"></i></a>
                    </td>
                </tr>
                <?php
            }
        } else {
            ?>
            <tr>
                <td align="center" colspan="8">Nessun record inserito</td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <div align="center">
        <h4>Nuovi Dati</h4><a href="index.php" class="btn btn-outline-primary" role="button"
                              background="#eee">qui</a><h4>
    </div>
</div>
</body>
</html>

