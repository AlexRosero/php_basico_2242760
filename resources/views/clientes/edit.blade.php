
@extends('plantillas.template')
@section('contenedor')


<form  method="POST" action="{{ url('clientes/' . $cliente->CustomerId) }}" class="form-horizontal">
    @method('PUT')
    @csrf
    <fieldset>

    <!-- Form Name -->
    <legend class="text-danger"> Actualizar Cliente {{ $cliente->FirstName }} {{ $cliente->LastName }} </legend>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="textinput">Nombre</label>
      <div class="col-md-4">
      <input value="{{ $cliente->FirstName }}" name="nombre" type="text" placeholder="" class="form-control input-md">


      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="textinput">Apellido</label>
      <div class="col-md-4">
      <input value="{{ $cliente->LastName }}" name="apellido" type="text" placeholder="" class="form-control input-md">
  

      </div>
    </div>



    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="textinput">Email</label>
      <div class="col-md-4">
      <input value="{{ $cliente->Email }}" name="email" type="text" placeholder="" class="form-control input-md">
      

      </div>
    </div>

    <br> 
    <!-- Button -->
    <input class="btn btn-info" type="submit" value="Guardar">
    <a class="btn btn-danger" href="{{ url('clientes')}}"> Regresar</a>






    </fieldset>
    </form>
    @endsection
