@extends('plantillas.template')

@section('contenedor')


<h1>Detalles de Cliente:

    {{$cliente->FirstName}}
    {{$cliente->LastName}}
</h1>
<ul>
 <p> Ciudad: {{$cliente->City}}</p>
 <p> Pais: {{$cliente->Country}}</p>

</ul>

<a class="btn btn-danger" href="{{ url('clientes')}}"> Regresar</a>
@endsection


