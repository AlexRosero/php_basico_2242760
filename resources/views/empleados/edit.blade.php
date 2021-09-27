
@extends('plantillas.template')

@section('contenedor')

<form  method="POST" action="{{ url('empleados/' . $empleado->EmployeeId) }}" class="form-horizontal">
    @method('PUT')
    @csrf
    <fieldset>

    <!-- Form Name -->
    <legend class="text-danger"> Actualizar empleado {{ $empleado->FirstName }} {{ $empleado->LastName }} </legend>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="textinput">Nombre</label>
      <div class="col-md-4">
      <input value="{{ $empleado->FirstName }}" name="nombre" type="text" placeholder="" class="form-control input-md">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="textinput">Apellido</label>
      <div class="col-md-4">
      <input value="{{ $empleado->LastName }}" name="apellido" type="text" placeholder="" class="form-control input-md">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="textinput">Titulo</label>
      <div class="col-md-4">
      <input value="{{ $empleado->Title }}" name="titulo" type="text" placeholder="" class="form-control input-md">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Dirección</label>
        <div class="col-md-4">
        <input value="{{ $empleado->Address }}" name="direccion" type="text" placeholder="" class="form-control input-md">

        </div>
    </div>


    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Ciudad</label>
        <div class="col-md-4">
        <input value="{{ $empleado->City }}" name="ciudad" type="text" placeholder="" class="form-control input-md">

        </div>
      </div>

    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">País</label>
        <div class="col-md-4">
        <input value="{{ $empleado->Country }}" name="pais" type="text" placeholder="" class="form-control input-md">

        </div>
      </div>


    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Telefono</label>
        <div class="col-md-4">
        <input value="{{ $empleado->Phone }}" name="telefono" type="text" placeholder="" class="form-control input-md">

        </div>
      </div>


    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Email</label>
        <div class="col-md-4">
        <input value="{{ $empleado->Email }}" name="email" type="text" placeholder="" class="form-control input-md">

        </div>
      </div>

<br> 

    <!-- Button -->

     <input class="btn btn-info" type="submit" value="Guardar">
          <a class="btn btn-danger" href="{{ url('empleados')}}"> Regresar</a>

    </fieldset>
    </form>
    @endsection
