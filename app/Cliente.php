<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    // vincular modelo a tabla
    protected $table = "customer";

    //establecer la PK para la entidad ( por defecto: id)
    protected $primaryKey = "CustomerId";

    //omitir campos de auditoria
    public $timestamps = false;


    //relacion 1 - M Cliente

    public function clientes (){
        return $this->hasMany('App\Cliente' , 'SupportRepId');
    }


    //relacion 1 - M Cliente y Facturas

    public function factura (){

            //utilizp metodo de eloquent: hasMany
            return $this->hasMany('App\Factura' , 'CustomerId');

    }


}


