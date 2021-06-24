<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlayList extends Model
{
    //

        protected $table="playlist";
        //establecer la PK para la entidad(por defecto: id)
        protected $primaryKey = "PlaylistId";
        //Omitir campos de auditoria
        public $timestamps = false;


        //relacion MM (playlist y cancion)}
        public function canciones(){

            //metodo: belongsToMany Parametros:
            // 1. Modelo destino
            // 2. Tabla pivote
            // 3. FK tabla origen
            // 4. fk tabla destino

            return $this->belongsToMany('App\Cancion' ,
                                         'playlisttrack' ,
                                         'PlaylistId' ,
                                         'TrackId'

        );


        }

}
