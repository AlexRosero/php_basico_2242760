<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disco extends Model
{
     // vincular modelo a tabla
     protected $table = "album";

     //establecer la PK para la entidad ( por defecto: id)
     protected $primaryKey = "AlbumId";

     //omitir campos de auditoria
     public $timestamps = false;


     //Inverso de la relacion muchos a 1
     public function artista(){

         //belongsTo: relacion m a 1
         return $this->belongsTo('App\Artista' , 'ArtistId');
     }


}
