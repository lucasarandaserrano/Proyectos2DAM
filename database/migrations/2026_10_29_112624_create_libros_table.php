<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
// Crea la tabla libros
public function up(): void
 {
Schema::create('libros', function (Blueprint $table) {
$table->id(); // clave primaria autoincremental
$table->string('titulo'); // obligatorio 
$table->string('autor'); 
$table->integer('anio_publicacion'); 

});
}
// Borra la tabla si hacemos rollback
public function down(): void
{
    Schema::dropIfExists('libros');
}
};