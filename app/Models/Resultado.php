<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resultado extends Model
{
    use HasFactory;
    protected $table = 'resultados';
    protected $hidden = [
        'id_resultado',
        'id_usuario',
        'transporte',
        'vivienda',
        'alimentacion',
        'total'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
