
@extends('plantillas.template')

@section('contenedor')


<form  method="POST" action="{{ url('empleados') }}" class="form-horizontal">

    @csrf
    <fieldset>

    <!-- Form Name -->
    <legend class="text-danger" >Nuevo Empleado</legend>


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
      {{ isset($empleado->firstName)}}
      </div>
    </div>


    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="textinput">Apellido</label>
      <div class="col-md-4">
      <input id="textinput" value="{{ old('apellido')}}" name="apellido" type="text" placeholder="" class="form-control input-md">
      {{ isset($empleado->LastName) }}
      </div>
    </div>


    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="textinput">Titulo</label>
      <div class="col-md-4">
      <input id="textinput" value="{{ old('titulo')}}" name="titulo" type="text" placeholder="" class="form-control input-md">
      {{ isset($empleado->Title)}}
      </div>
    </div>

        <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="textinput">Dirección</label>
      <div class="col-md-4">
      <input id="textinput" value="{{ old('direccion')}}" name="direccion" type="text" placeholder="" class="form-control input-md">
        {{ isset($empleado->Address)}}
       </div>
    </div>


        <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Ciudad</label>
        <div class="col-md-4">
        <input id="textinput" value="{{ old('ciudad')}}" name="ciudad" type="text" placeholder="" class="form-control input-md">
        {{ isset($empleado->City)}}
        </div>
    </div>

          <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">País</label>
        <div class="col-md-4">
        <input id="textinput" value="{{ old('pais')}}" name="pais" type="text" placeholder="" class="form-control input-md">
        {{ isset($empleado->Country)}}
        </div>
    </div>

         <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Telefono</label>
        <div class="col-md-4">
        <input id="textinput" value="{{ old('telefono')}}" name="telefono" type="text" placeholder="" class="form-control input-md">
        {{ isset($empleado->Phone)}}
        </div>
    </div>

         <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Email</label>
        <div class="col-md-4">
        <input id="textinput" value="{{ old('email')}}" name="email" type="text" placeholder="" class="form-control input-md">
        {{ isset($empleado->Email)}}
        </div>
    </div>

<br>

    <!-- Button -->
    <input class="btn btn-primary" type="submit" value="Guardar">
    <a class="btn btn-danger" href="{{ url('empleados')}}"> Regresar</a>

    </fieldset>
    </form>
    @endsection
