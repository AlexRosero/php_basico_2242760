
@extends('plantillas.template')

@section('contenedor')

<form  method="POST" action="{{ url('clientes') }}" class="form-horizontal">
    @csrf
    <fieldset>

    <!-- Form Name -->
    <legend class="text-danger">Nuevo Cliente</legend>

    <!-- Alerta -->
<!-- Recorrer errores -->
  @if (count($errors)>0)

    <div class="alert alert-danger" role="alert">
    <ul>
        @foreach ( $errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    </div>
  @endif

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="textinput">Nombre</label>
      <div class="col-md-4">
      <input id="textinput" value="{{ old('nombre')}}" name="nombre" type="text" placeholder="" class="form-control input-md">
       {{ isset($cliente->FirstName)}}
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="textinput">Apellido</label>
      <div class="col-md-4">
      <input id="textinput" value="{{ old('apellido')}}" name="apellido" type="text" placeholder="" class="form-control input-md">
       {{ isset($cliente->LastName)}}
      </div>
    </div>



    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="textinput">Email</label>
      <div class="col-md-4">
      <input id="textinput" value="{{ old('email')}}" name="email" type="text" placeholder="" class="form-control input-md">
       {{ isset($cliente->Email)}}
      </div>
    </div>

    <br> 
    <!-- Button -->
    <input class="btn btn-info" type="submit" value="Guardar">
    <a class="btn btn-danger" href="{{ url('clientes')}}">Regresar</a>


    </fieldset>
    </form>
 @endsection