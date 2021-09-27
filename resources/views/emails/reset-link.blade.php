
<!DOCTYPE html>
<html>
<head>
  <title> Login </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href=" {{ ('css/estilosLogin.css') }}" rel="stylesheet" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</head>
<body style="background: rgb(145, 188, 245); color: snow;">






            <h2 style="color: rgb(0, 0, 0)"> Restaurar Contraseña Nueva</h2>
            <strong style="color: rgb(0, 0, 0)">Paso Número 2 </strong>
            <br><br>

                <strong>Puedes resetear tu clave desde el siguiente enlace: </strong>

            <a  href="{{ url('reset-password' , $token ) }}"> Restaurar Contraseña</a>







</body>
</html>








