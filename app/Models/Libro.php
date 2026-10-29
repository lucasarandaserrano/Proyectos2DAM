<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
//
class Libro extends Model
{

protected $table = 'libros';

public $timestamps = false;

protected $fillable = ['titulo', 'autor', 'anio_publicacion'];
}

