<?php

namespace App\Http\Controllers;

use App\PDF;
use App\Cancion;
use Illuminate\Http\Request;
use Crabbly\Fpdf\Fpdf;
use Symfony\Component\Console\Tester\ApplicationTester;

class PDFcontroller extends Controller
{
    //
    public function pdf()
    {

    /*
        $categorias = [
            "Rock" => 50,
            "Jazz" => 60
        ];

    */


        $canciones = PDF::all();

        $numeroCelda = 6;



        $pdf = app('Fpdf');
         //1. Añadir paginas al documento

         $pdf->AddPage('L' , 'A4' ,);


         //2. Caracteristicas de estilo
         $pdf->SetFont('Courier', 'BIU', 20);

         //3. Imprimir contenido en el pdf

         //$pdf->Cell(40, 10,);

         $pdf->setXY(10,30);
         $pdf->setFont('Courier', '' , 16);
         $pdf->setTextColor(33, 111, 189);
         $pdf->Cell(80 , $numeroCelda , "Genero", 'BT' , 0, 'C');
         $pdf->Cell(80 , $numeroCelda , "Numero Canciones", 'BT' , 1, 'C');



        /*

         foreach ($categorias as $categoria => $numcanciones){

            $pdf->Cell(80 , 10 , $categoria, 'BT' , 0, 'C');
            $pdf->Cell(80 , 10 , $numcanciones, 'BT' , 1, 'C');


         }
         */

        $pdf->setTextColor(12, 9, 9);
         foreach ($canciones as $cancion){

            $pdf->Cell(80 , $numeroCelda , $cancion -> Name , 1 , 0, 'C');
            $pdf->Cell(80 , $numeroCelda , $cancion -> canciones()->count('track.GenreId'), 'BT' , 1, 'C');


         }









         //4. Mostrar el pdf
         return response($pdf->Output() , 200 , [ 'Content-Type' =>'Application/pdf' ]);


    }
}
