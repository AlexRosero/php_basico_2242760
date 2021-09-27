
@extends('plantillas.template')
@section('contenedor2')


<h1 class="text-primary">Lista de Empleados</h1>

@if ( session ('mensaje_exito'))

<div class="alert alert-info alert-dismissible fade show" role="alert">
  {{ session ('mensaje_exito') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

@endif

<a type="submit" class="btn btn-success" href="{{ url('empleados/create') }}"> Nuevo Empleado</a>
<br><br>

<table class="table table-primary">
    <thead>
    <tr>
        <th>Nombres</th>
        <th>Titulo</th>
        <th>Dirección</th>
        <th>Ciudad</th>
        <th>País</th>
        <th>Telefono</th>
        <th>Email</th>
        <th>Acciones</th>

    </tr>
</thead>
    <tbody>
        @foreach ($empleados as $empleado)
        <tr>
         <td class="table-active">
             {{$empleado->FirstName}}
             {{$empleado->LastName}}
         </td>
         <td>
            {{$empleado->Title}}
         </td>
         <td>
            {{$empleado->Address}}
         </td>
         <td>
            {{$empleado->City}}
         </td>
         <td>
            {{$empleado->Country}}
         </td>
         <td>
            {{$empleado->Phone}}
         </td>
         <td>
            {{$empleado->Email}}
         </td>
         <td>
             <a type="submit" class="btn btn-secondary btn-sm" href="{{ url('empleados/' .$empleado->EmployeeId)}}"> Ver detalles</a>

             <a type="submit" class="btn btn-warning btn-sm" href="{{url('empleados/'. $empleado->EmployeeId . "/edit")}}"> Actualizar </a>
         </td>







        </tr>

        @endforeach
    </tbody>
</table>

{{ $empleados->links() }}

@endsection

