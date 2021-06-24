<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\Finder\Iterator\CustomFilterIterator;

class Empleados extends Model
{
    // vincular modelo a tabla
    protected $table = "employee";

    //establecer la PK para la entidad ( por defecto: id)
    protected $primaryKey = "EmployeeId";

    //omitir campos de auditoria
    public $timestamps = false;


    //relacion 1 ------  M Cliente
    public function clientes(){
        return $this->hasMany('App\Cliente' , 'SupportRepId');
    }



    //relacion 1 ------  M Facturas (a traves del cliente)
    public function factura(){
        return $this->hasManyThrough('App\Factura',
                                      'App\Cliente',
                                      'SupportRepId', // FK - Clave foranea-  del abuelo con el papa
                                      'CustomerId',
                                      'EmployeeId',
                                      'CustomerId'
                                    );


    }



}

