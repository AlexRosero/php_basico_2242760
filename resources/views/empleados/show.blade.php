@extends('plantillas.template')

@section('contenedor')

<H1 class="text-dark"> Detalles Empleados</H1>

<h3 class="text-danger">
    {{$empleado->FirstName}}
    {{$empleado->LastName}}

</h2>
<ul>
    <p>Titulo: {{ $empleado->Title}}</p>
    <p>Dirección: {{$empleado->Address}}</p>
    <p>Telefono: {{$empleado->Phone}}</p>
    <p>Email: {{$empleado->Email}}</p>
</ul>
<br>
<a class="btn btn-primary" href="{{ url('empleados')}}"> Regresar</a>

@endsection
