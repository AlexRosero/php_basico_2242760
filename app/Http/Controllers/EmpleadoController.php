<?php

namespace App\Http\Controllers;

use App\Empleado;

use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;
use App\Http\Requests\StoreEmpleado;


class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('empleados.index')
        ->with('empleados' ,Empleado::paginate(4));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view ('empleados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmpleado $request)
    {
        //
        //Seleccinar el id max que exista en los clientes

        $maxempleado=Empleado::all()->max('EmployeeId');

         $nuevoempleado = new Empleado();
         $nuevoempleado->EmployeeId = $maxempleado +1;
         $nuevoempleado->FirstName = $request->input("nombre");
         $nuevoempleado->LastName = $request->input("apellido");
         $nuevoempleado->Title = $request->input("titulo");
         $nuevoempleado->Address = $request->input("direccion");
         $nuevoempleado->City = $request->input("ciudad");
         $nuevoempleado->Country = $request->Input("pais");
         $nuevoempleado->Phone = $request->input("telefono");
         $nuevoempleado->Email = $request->input("email");
         $nuevoempleado->save();

         echo"Empleado Registrado";

         return redirect("empleados")->with('mensaje_exito', "Empleado registrado con éxito");


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        //
        return view ('empleados.show')
        ->with('empleado', $empleado);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit(Empleado $empleado)
    {
        //
        return view('empleados.edit')->with('empleado' , $empleado);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empleado $empleado)
    {
        //

         $empleado->FirstName = $request->input("nombre");
         $empleado->LastName = $request->input("apellido");
         $empleado->Title = $request->input("titulo");
         $empleado->Address = $request->input("direccion");
         $empleado->City = $request->input("ciudad");
         $empleado->Country = $request->Input("pais");
         $empleado->Phone = $request->input("telefono");
         $empleado->Email = $request->input("email");
         $empleado->save();



         return redirect("empleados")->with('mensaje_exito', "Empleado actualizado con éxito");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empleado $empleado)
    {
        //
    }
}
