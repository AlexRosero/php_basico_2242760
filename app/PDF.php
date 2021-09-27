<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cancion;

class PDF extends Model
{
    //

    // vincular modelo a tabla
    protected $table = "genre";

    //establecer la PK para la entidad ( por defecto: id)
    protected $primaryKey = "GenreId";

    //omitir campos de auditoria
    public $timestamps = false;

    public function canciones(){
        return $this->hasMany(Cancion::class, 'GenreId');

    }

}
