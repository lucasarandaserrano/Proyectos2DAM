<?php
namespace Database\Seeders;
use App\Models\Libro_las;
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
 // Mete unos libros de ejemplo
 public function run(): void
 {
Libro_las::create([
    'titulo' => 'Don Quijote de la Mancha',
    'autor' => 'Miguel de Cervantes',
    'anio_publicacion' => 1600,
]);
Libro_las::create([
    'titulo' => 'La Odisea',
    'autor' => 'Homero',
    'anio_publicacion' => 1500,
]);
Libro_las::create([
    'titulo' => '1984',
    'autor' => 'George Orwell',
    'anio_publicacion' => 1949,
]);
Libro_las::create([
    'titulo' => 'El cuerpoespin Serafin',
    'autor' => 'Maite Figueroa',
    'anio_publicacion' => 2030,
]);
}
}

