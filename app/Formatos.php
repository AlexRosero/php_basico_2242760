<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formatos extends Model
{
    //
    protected $table="mediatype";
    //establecer la PK para la entidad(por defecto: id)
    protected $primaryKey = "MediaTypeId";
    //Omitir campos de auditoria
    public $timestamps = false;

    public function canciones (){
        return $this->hasMany( 'App\Cancion',
                                'MediaTypeId'

        );
    }
}
