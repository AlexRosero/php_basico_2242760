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
          <strong> Paso Número 3: </strong> <br> <br>
          <p> Ingrese su nueva Contraseña, para continuar</p>



          <!--     Estructura Login     -->

          <form  class="form-box px-3" method="POST"  action=" {{ route('reset.password') }}"  >
            @csrf
            <div class="form-input">
                <span><i class="fa fa-envelope-o"></i></span>
                <input id="email" type="text" name="email" placeholder="Email" class="form-control">
            </div>
            <div class="form-input">
                <span><i class="fa fa-key"></i></span>
                <input id="password" type="password" name="password" placeholder="Contraseña" class="form-control">
            </div>
            <div class="form-input">
                <span><i class="fa fa-key"></i></span>
                <input id="password" type="password" name="password_confirmation placeholder="Contraseña" class="form-control">
                <input type="hidden" name="token" value="{{ $token }}">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-block text-uppercase" > Restaurar Contraseña </button>
            </div>

        </form>


<!--

<h2> Recuperar password paso 3 </h2>
<form method="POST" action="{{ route('reset.password') }}">
    @csrf

    Email:<input name="email" />
    <br>
    Contraseña: <input type="password" name="password" />
    Confirmar Contraseña: <input type="password" name="password_confirmation" />
    <input type="hidden" name="token" value="{{ $token }}" />
    <br>
    <input type="submit" value="Resetear" />

-->




