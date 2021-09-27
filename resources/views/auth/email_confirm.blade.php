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
<body>

  <div class="container">
    <div class="row px-3">
      <div class="col-lg-10 col-xl-9 card flex-row mx-auto px-0">
        <div class="img-left d-none d-md-flex"></div>

        <div class="card-body">
          <h4 class="title text-center mt-4"> Recuperar Contraseña </h4>
          <strong> Paso Número 1: </strong> <br> <br>
          <p> Ingrese su correo electronico, para continuar</p>

          @if ( session ('mensaje_exito'))

        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session ('mensaje_exito') }}

        </div>

        @endif


          <!--     Estructura Login     -->

          <form  class="form-box px-3" method="POST"  action=" {{ route("send.link") }}"  >
            @csrf
            <div class="form-input">
                <span><i class="fa fa-envelope-o"></i></span>
                <input id="email" type="text" name="email" placeholder="Email" class="form-control">
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-block text-uppercase" > Confirmar </button>
            </div>

            <div class="text-center mb-2">
                Iniciar Sesión
                <a class="btn btn-primary" href="{{ url('login')}}"> Regresar </a>

              </div>
        </form>




<!--

<h2> Recuperar password paso 1 </h2>
<form method="post" action="{{ route("send.link") }}">
    @csrf

    Ingrese correo: <input type="email" name="email">
    <button type="submit"> Confirmar </button>




</form>
-->
