<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01
Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inserimento</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .table-bordered {
            width: 60%
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
            <td align="center">Inserisci i dati richiesti</td>
        </tr>
        <tr>
            <td>
                <table class="table table-bordered" align="center">
                    <form method="post" action="inputLinea.php">
                        <tr>
                            <td>Prima Partenza</td>
                            <td><input type="time" name="primo" size="20"></td>
                        </tr>
                        <tr>
                            <td>Ultima Partenza</td>
                            <td><input type="time" name="ultimo" size="20"></td>
                        </tr>
                        <tr>
                            <td>ID Mezzo</td>
                            <td><input type="text" name="revisione" size="20"></td>
                        </tr>
                        <tr>
                            <td>ID capolinea</td>
                            <td><input type="text" name="revisione" size="20">
                        </tr>
                        <tr>
                            <td colspan="2" align="center"><input type="submit" class="btn btn-outline-primary"
                                                                  name="submit" value="Invia"></td>
                        </tr>
                    </form>
                </table>
            </td>
        </tr>
    </table>
</div>
</body>
</html>