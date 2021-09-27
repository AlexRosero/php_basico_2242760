<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreCliente;
use Illuminate\Support\Facades\Auth;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //mostrar la variaable flashj "mensaje_exito" si existe
        //if(Auth::check()){

            return view('Clientes.index')
            ->with('Clientes', Cliente::paginate(8));

        /*}else{
             return redirect()
             ->route('login.form')
             ->with('mensaje' , "Ingreso no permitido, inicia sesión");
        }*/

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('clientes.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCliente $request)
    {
        //verificar datos enviados desde create
        /*echo "<pre>";
        var_dump($request->all());
        echo "<pre>";
        */
/*
        //validacion: proceso para data input
        // 1. Establecer las reglas validacionesDB:
        $reglas_validacion = [

            "nombre" => 'required | alpha | max:10 | unique:customer,FirstName' ,
            "apellido",
            "email"
        ];

        //2. crear ek obejto validacion
    $validator = validator::make($request->all() ,$reglas_validacion);


    //3. Validar
    if ($validator->fails()){

        //validacion fallida
        return redirect ('clientes/create')->withErrors($validator);
        //die ($validator->getMessageBag());


    }
*/



        //Seleccinar el id max que exista en los clientes

        $maxcliente=Cliente::all()->max('CustomerId');


        //Crear el nuevo recurso cliente

        $nuevocliente = new Cliente();
        $nuevocliente->CustomerId = $maxcliente + 1;
        $nuevocliente->FirstName = $request->input("nombre");
        $nuevocliente->LastName = $request->input("apellido");
        $nuevocliente->Email = $request->input("email");
        $nuevocliente->save();

        echo"Cliente Registrado";

        //redireccionar a la rta deseada
        //Ojo: El redireccionamiento solo de aplica a rutas GET
        //redirect puede enviar a la ruta destino Datos Flash

        return redirect("clientes")->with('mensaje_exito', "Cliente registrado con exitoso");

        //echo "cliente registrado"



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        //
       return view ('clientes.show')
        ->with('cliente', $cliente);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {

        //var_dump($cliente);
        //Mostrar el formulario de actualizar recurso
        return view('clientes.edit')->with('cliente' , $cliente);




    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
        //
        //var_dump($cliente);

        //Actualizar el cliente que llega a tarves del model binding
        $cliente->FirstName = $request->input("nombre");
        $cliente->LastName = $request->input("apellido");
        $cliente->Email = $request->input("email");

        $cliente->save();
        echo "Cliente actualizado";

        return redirect("clientes")->with('mensaje_exito', "Cliente actualizado con exitoso");




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        //
    }



    public function habilitar($idcliente)
    {
        //

         $cliente = Cliente::find($idcliente);
         switch($cliente->habilitado){
             case null:
                $cliente->habilitado = 1;
                $cliente->save();
                $mensaje_exito = "Cliente activado";

                break;
             case 1:
                $cliente->habilitado = 2;
                $cliente->save();
                $mensaje_exito = "Cliente desactivado";

                break;
             case 2:
                $cliente->habilitado = 1;
                $cliente->save();
                $mensaje_exito = "Cliente activado";

                break;




         }

         //$cliente->habilitado =1;
         //$cliente->save();

         return redirect('clientes')->with('mensaje_exito' , $mensaje_exito);



    }
}
