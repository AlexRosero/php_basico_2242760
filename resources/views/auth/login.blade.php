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
          <h4 class="title text-center mt-4">Login</h4>


          <!--     Estructura Login     -->




      @if ( session ('mensaje_exito'))

      <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session ('mensaje_exito') }}

      </div>

      @endif

      @if ( session ('mensaje'))

      <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session ('mensaje') }}

      </div>

      @endif


          <form  class="form-box px-3" method="POST"  action=" {{ route('login.verify') }}"  >
            @csrf
            <div class="form-input">
                <span><i class="fa fa-envelope-o"></i></span>
                <input id="email" type="text" name="email" placeholder="Email" class="form-control">
            </div>
            <div class="form-input">
                <span><i class="fa fa-key"></i></span>
                <input id="password" type="password" name="password" placeholder="Contraseña" class="form-control">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-block text-uppercase" >Iniciar Sesión </button>
            </div>




            <!------------------------------>

            <!-- Aplicaciones -->

            <div class="text-right">
            <a href="#" class="forget-link"> Forget Password? </a>
            </div>

            <div class="text-center mb-3">
                Inicia Sesión con:
              </div>

            <div class="row mb-3">
              <div class="col-4">
                <a href="#" class="btn btn-block btn-social btn-facebook"> facebook </a>
              </div>

              <div class="col-4">
                <a href="#" class="btn btn-block btn-social btn-google"> google </a>
              </div>

              <div class="col-4">
                <a href="#" class="btn btn-block btn-social btn-twitter"> twitter </a>
              </div>
            </div>

            <hr class="my-4">

            <div class="text-center mb-2">
              Olvidaste tu Contraseña
              <a class="btn btn-primary" href="{{ url('confirmar-correo')}}"> Restaurar Contraseña </a>

            </div>

          </form>

        </div>

      </div>

    </div>

  </div>

</body>
</html>
