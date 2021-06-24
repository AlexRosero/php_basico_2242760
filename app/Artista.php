<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use PhpParser\Builder\Function_;

class Artista extends Model
{
    // vincular modelo a tabla
    protected $table = "artist";

    //establecer la PK para la entidad ( por defecto: id)
    protected $primaryKey = "ArtistId";

    //omitir campos de auditoria
    public $timestamps = false;


    //Definir relacion aertista 1 - M albums
    public function discos(){
        //hasmany: parametros
        //1. Modelo a relacionar
        //2. FK del modelo papa
        //3.PK del modelo hijo
        return $this->HasMany('App\Disco' ,'ArtistId');

    }

    //Definir la relacion de multitabla entre
    // Artista y sus canciones(tracks)

    public function canciones(){

        //hasManyThrough: ParametrosDB:
        // 1. Modelo Nieto
        // 2. Modelo Papa
        // 3. FK del Abuelo en el Papa
        // 4. FK del Papa en el nieto
        // 5. Clave Primario (PK) del abuelo
        // 6. PK del Papa

        return $this->hasManyThrough('App\Cancion' ,
                                      'App\Disco' ,
                                      'ArtistId' ,
                                      'AlbumId' ,
                                      'ArtistId' ,
                                      'AlbumId'

    );


    }

}
