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
            <td align="center">Inserisci i dati richiesti</td>
        </tr>
        <tr>
            <td>
                <table class="table table-bordered" align="center">
                    <form method="post" action="input.php">
                        <tr>
                            <td>Capienza (Persone)</td>
                            <td><input type="text" class="form-control" name="capienza" size="20">
                            </td>
                        </tr>
                        <tr>
                            <td>Peso (Kg)</td>
                            <td><input type="text" class="form-control" name="peso" size="20">
                            </td>
                        </tr>
                        <tr>
                            <td>Revisione</td>
                            <td><input type="date" class="form-control" name="revisione" size="20">
                            </td>
                        </tr>
                        <tr>
                            <td>Tipo</td>
                            <td>
                                <select id="tipo" class="form-control" name="tipo" onchange="giveSelection(this.value)">
                                    <option value="Gomma">Gomma</option>
                                    <option value="Rotaia">Rotaia</option>
                                    <option value="Magnetico">Magnetico</option>
                                    <!-- <td><input type="text" name="tipo" size="20"> </td> !-->
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Tipo Mezzo</td>
                            <td>
                                <select id="tipomezzo" class="form-control" name="tipomezzo">
                                    <option data-option="Rotaia" value="Tram">Tram</option>
                                    <option data-option="Gomma" value="Pullman">Pullman</option>
                                    <option data-option="Rotaia" value="Metro">Metro</option>
                                    <option data-option="Magnetico" value="Treno">Treno Sub</option>
                                </select>
                            </td>
                        </tr>
<!--                        <tr>-->
<!--                            <td>Modello</td>-->
<!--                            <td>-->
<!--                                <select id="modello" class="form-control" name="modello">-->
<!--                                    <option value="28">'28</option>-->
<!--                                    <option value="60">'60</option>-->
<!--                                    <option value="Sirietto">Sirietto</option>-->
<!--                                    <option value="Verde">Verde</option>-->
<!--                                    <option value="Vecchi">Vecchi</option>-->
<!--                                    <option value="90">'90</option>-->
<!--                                    <option value="Leonardo">Leonardo</option>-->
<!--                                </select>-->
<!--                            </td>-->
<!--                        </tr>-->
                        <tr>
                            <td></td>
                            <td align="right"><input class="btn btn-outline-primary" type="submit" name="submit" value="Invia"></td>
                        </tr>
                    </form>
                </table>
            </td>
        </tr>
    </table>

    <script>
        var sel1 = document.querySelector('#tipo');
        var sel2 = document.querySelector('#tipomezzo');
        var options2 = sel2.querySelectorAll('option');

        function giveSelection(selValue) {
            sel2.innerHTML = '';
            for(var i = 0; i < options2.length; i++) {
                if(options2[i].dataset.option === selValue) {
                    sel2.appendChild(options2[i]);
                }
            }
        }
        giveSelection(sel1.value);
    </script>
</div>
</body>
</html>