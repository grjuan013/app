<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $table = 'noticias';
    protected $hidden = [
        'id_noticia',
        'imagen',
        'encabezado',
        'resumen',
        'autor',
        'fecha',
        'url_noticia'
    ];
}
