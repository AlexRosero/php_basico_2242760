@extends('plantillas.template');

@section('contenedor')
 <h1>Nuevo Usuario</h1>

<form  method="POST" action="{{ route("usuarios.store") }}">
@csrf
<div class="mt-5">
    <label for="form-label" for="name"> Nombre Usuario </label>
    <input  class="form-control"  value="{{ old('name')}}" type="text" id="name" name="name" />
    <strong class="text-danger"> {{$errors->first('name')}} </strong>
</div>

<div class="mt-4">
    <label for="form-label" for="email"> Email </label>
    <input  class="form-control"  value="{{ old('email')}}" type="text" id="email" name="email" />
    <strong class="text-danger"> {{$errors->first('email')}} </strong>
    </div>

<div class="mt-5">
    <label for="form-label" for="password"> Contraseña </label>
    <input  class="form-control"  value="{{ old('password')}}"  type="password" id="password" name="password" />
    <strong class="text-danger"> {{$errors->first('password')}} </strong>
</div>

<div class="mt-5">
    <label for="form-label" for="password1"> Confirmar Contraseña </label>
    <input  class="form-control" value="{{ old('password')}}" type="password" id="password1" name="password_confirmation" />
</div>



<div class="mt-4">
    <button type="submit" class="btn btn-primary" > Guardar </button>
</div>

</form>


@endsection
