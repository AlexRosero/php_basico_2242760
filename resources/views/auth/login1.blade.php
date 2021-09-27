<!--
@ extends('plantillas.template')
@ section('contenedor')

 <h1>Usuario</h1>

 @ if (session('mensaje'))
  <p> { { session ('mensaje' , "Usuario no encontrado")}} </p>

 @ endif


<form  method="POST" action="{ { route ('login.verify')  }}">
@ csrf


<div class="mt-4">
    <label for="form-label" for="email"> Email </label>
    <input  class="form-control"   type="text" id="email" name="email" />
</div>

<div class="mt-5">
    <label for="form-label" for="password"> Contraseña </label>
    <input  class="form-control"   type="password" id="password" name="password" />
</div>

<div class="mt-5">
    <label for="form-label" for="password1"> Confirmar Contraseña </label>
    <input  class="form-control"  type="password" id="password1" name="password_confirmation" />
</div>


<div class="mt-4">
    <button type="submit" class="btn btn-primary" > Guardar </button>
</div>

</form>


@ endsection
-->

@if(session('mensaje'))
    <p> {{ session('mensaje')  }} </p>
@endif
<form method="POST"  action="{{  route('login.verify')  }}"  >
    @csrf
    <div class="mt-5 mb-4">
        <label for="email" class="form-label">Email:</label>
        <input id="email" type="text" name="email" class="form-control">
    </div>
    <div class="mt-5 mb-4">
        <label for="password" class="form-label">Password:</label>
        <input id="password" type="password" name="password" class="form-control">
    </div>
    <div class="mt-5 mb-4">
        <button type="submit">Guardar</button>
    </div>
</form>

