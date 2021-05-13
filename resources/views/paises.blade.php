<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--https://cdnjs.com/-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" />

    <title>Paises</title>
</head>

<body>

    <br><br>

  <center><h2 class="text-danger">Lista de Paises</h2></center>

    <br><br>


  <table class="table table-striped table-dar">
    <tr class="table-success">
        <th class="text-danger">Nombre</th> 
        <th class="text-primary">Capital</th> 
        <th class="text-dark">Moneda</th>   
        <th class="text-info">Poblacion</th>   
     </tr>

      @foreach ($naciones as $nombre => $nacion)
        <tr class="table-info">
            <td> <b>{{ $nombre }}</b></td>
            <td> {{ $nacion["Capital"] }}</td>
            <td> {{ $nacion["Moneda"] }}</td>
            <td> {{ $nacion["Poblacion"] }}</td>

          
        </tr>

      @endforeach
  </table>





</body>

</html>