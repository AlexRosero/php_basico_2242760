<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Dependencias especificas de envio de correo
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Mail\CorreoLink;
use Illuminate\Support\Facades\Mail;
use App\User;
use Illuminate\Support\Facades\Hash;



class ResetPasswordController extends Controller
{
    // mostrar formulario de envio de link por
    public function emailform()
    {
        return view('auth.email_confirm');

    }

    //enviar el link de seguridad al correo anterior
    public function submitlink( Request $request)
    {
        //1.Crear el codigo de seguridad(aleatorio)
            $token = Str::random(64);
            //var_dump($token);

        //2. Registrarlo en la tabla password_resets
            DB::table('password_resets')
                ->insert(
                    [
                        'email' => $request->input('email'),
                        'token' => $token,
                        'created_at' => Carbon::now()

                    ]

                );


        //3. Enviar el correo con el codigo de seguridad

        Mail::to($request->input('email'))
            ->send( new CorreoLink($token));

            return redirect("confirmar-correo")->with('mensaje_exito', " Verifique su correo, para confirmar su autenticación");





    }

    //mostrar el formulario de reseteo de password
    public function resetform($token)
    {

        return view('auth.reset-password')
          ->with('token', $token);
    }

    //cambiar password
    public function resetpassword(Request $request)
    {
         //var_dump($request->all());

         //1. Verificar que el token esté en la tabla password-resets
         //   bajo el email correcto: DB::table

         $token_hallado = DB::table('password_resets')
         ->where(
             [
                 'email' => $request->input('email'),
                 'token'=> $request->input('token')
             ]
             )->first();

        if ($token_hallado === null){
            die('token invalido');
        }


         //2. Si el token existe para el email, actualizar el password
         //   en la tabal users(Entidades)

         $usuario_actualizar = User::where('email', $request->input('email'))
                               ->first();

        $usuario_actualizar->password = Hash::make($request->input('password'));
        $usuario_actualizar->save();




         //3. Borrar el token de la tabla password-resets
         DB::table('password_resets')
         ->where( [ "email" => $request->input("email") ])
         ->delete();

         return redirect("login")->with('mensaje_exito', " Contraseña restaurada correctamente, Inicie Sesión nuevamente");




    }






}
