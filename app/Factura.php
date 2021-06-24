<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    //


    protected $table="invoice";
    //establecer la PK para la entidad(por defecto: id)
    protected $primaryKey = "InvoiceId";
    //Omitir campos de auditoria
    public $timestamps = false;

    // RELACION M:M ENTRE FACTURA Y CANCIONES
    public function canciones(){

        //relacion mm: belongsToMany()
        //parametros: 1. Modelo a relacionar
        //            2. La tabla pivote
        //            3. FK del presente modelo en la tabla pivot
        //            4. FK del modelo relacinado en la tabla pivote

        return $this->belongsToMany('App\Cancion',
                                     'invoiceline',
                                     'InvoiceId',
                                     'TrackId',
                                   );
    }


}
