

@extends('plantillas.template')

@section('contenedor')


<h1 class="text-primary ">Lista de Clientes</h1>




@if ( session ('mensaje_exito'))

<div class="alert alert-warning alert-dismissible fade show" role="alert">
  {{ session ('mensaje_exito') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

@endif


<a type="submit" href="{{ url('clientes/create') }}" class="btn btn-success" >Nuevo Cliente</a>
<br><br>

<table class="table table-primary">
    <thead>
    <tr>
        <th>Nombres</th>
        <th>Email</th>
        <th> Acciones </th>

    </tr>
</thead>
    <tbody>
        @foreach ($Clientes as $cliente)
        <tr>
         <td class="table-active">
             {{$cliente->FirstName}}
             {{$cliente->LastName}}
         </td>
         <td>
            {{$cliente->Email}}
         </td>

         <td>
             <a  type="submit" type="submit" class="btn btn-secondary btn-sm" href="{{url('clientes/'. $cliente->CustomerId)}}">
                Ver detalles
            </a>

            <a type="submit" type="submit" class="btn btn-warning btn-sm" href="{{url('clientes/'. $cliente->CustomerId . "/edit")}}">
               Actualizar
           </a>

         </td>

         <td>


            @switch($cliente->habilitado)
            @case(null)
                <a type="submit" href="{{url('clientes/'.$cliente->CustomerId.'/habilitar')}}">Asignar Estado</a>
            @break

            @case(1)
                <a type="submit" href="{{url('clientes/'.$cliente->CustomerId.'/habilitar')}}">Desahilitar Estado</a>
            @break

            @case(2)
                  <a type="submit" href="{{url('clientes/'.$cliente->CustomerId.'/habilitar')}}">Habilitar Estado</a>
                        @break

                    @endswitch
         </td>

        </tr>

        @endforeach
    </tbody>
</table>
{{ $Clientes->links() }}

@endsection

