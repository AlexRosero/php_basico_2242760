<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    // vincular modelo a tabla
    protected $table = "employee";

    //establecer la PK para la entidad ( por defecto: id)
    protected $primaryKey = "EmployeeId";

    //omitir campos de auditoria
    public $timestamps = false;

}

