<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Carlos',
            'email' => 'Carlos@gmail.com',
            'password' => hash::make('41736Abc*'),
        ]);
        DB::table('users')->insert([
            'name' => 'Alice',
            'email' => 'Alice@gmail.com',
            'password' => hash::make('41736Abc*'),
        ]);
        DB::table('users')->insert([
            'name' => 'Rubi',
            'email' => 'Rubi@gmail.com',
            'password' => hash::make('41736Abc*'),
        ]);
        DB::table('users')->insert([
            'name' => 'Antonio',
            'email' => 'Antonio@gmail.com',
            'password' => hash::make('41736Abc*'),
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'tecnologia',
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'arte',
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'musica',
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'historia',
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'ciencia',
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'educacion',
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'actividadfisica',
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'salud',
        ]);
                /*TECNOLOGIA*/
        DB::table('videos')->insert([
            'nombre' => 'La tecnología que cambia nuestra vida',
            'duracion' => '13:17',
            'calificacion' => '5',
            'categoria' => 'tecnologia',
            'enlace' => 'https://www.youtube.com/embed/AU_m-7dDVR8',
        ]);
        DB::table('videos')->insert([
            'nombre' => 'Impresionantes avances de la robótica 2020',
            'duracion' => '4:36',
            'calificacion' => '5',
            'categoria' => 'tecnologia',
            'enlace' => 'https://www.youtube.com/embed/T1_lJchHWRk',
        ]);
        DB::table('videos')->insert([
            'nombre' => 'Tecnología del siglo XXI y Educación',
            'duracion' => '9:21',
            'calificacion' => '4',
            'categoria' => 'tecnologia',
            'enlace' => 'https://www.youtube.com/embed/a8eDwAR3ujU',
        ]);
                /*ARTE*/
        DB::table('videos')->insert([
            'nombre' => 'HISTORIA DEL ARTE EN 10 MINUTOS (Y ALGO MÁS)',
            'duracion' => '14:06',
            'calificacion' => '5',
            'categoria' => 'arte',
            'enlace' => 'https://www.youtube.com/embed/rUHxLrZwSIY',
        ]);
        DB::table('videos')->insert([
            'nombre' => 'Leonardo Da Vinci - Documental de la BBC',
            'duracion' => '31:30',
            'calificacion' => '5',
            'categoria' => 'arte',
            'enlace' => 'https://www.youtube.com/embed/tMg1q-ZVHho',
        ]);
        DB::table('videos')->insert([
            'nombre' => '¿Qué hace a la Mona lisa tan especial?',
            'duracion' => '10:44',
            'calificacion' => '4',
            'categoria' => 'arte',
            'enlace' => 'https://www.youtube.com/embed/J8PRH4Ve_do',
        ]);
                /*MUSICA*/
        DB::table('videos')->insert([
            'nombre' => 'Pedro Infante-Cien Años',
            'duracion' => '3:32',
            'calificacion' => '5',
            'categoria' => 'musica',
            'enlace' => 'https://www.youtube.com/embed/xqEfo1t-loY',
        ]);
        DB::table('videos')->insert([
            'nombre' => 'Juan Gabriel-Querida',
            'duracion' => '5:28',
            'calificacion' => '4',
            'categoria' => 'musica',
            'enlace' => 'https://www.youtube.com/embed/o3J3nrdS2_c',
        ]);
        DB::table('videos')->insert([
            'nombre' => 'Vicente Fernández-Hermoso Cariño (en vivo)',
            'duracion' => '2:36',
            'calificacion' => '5',
            'categoria' => 'musica',
            'enlace' => 'https://www.youtube.com/embed/oq70h9XBj_0',
        ]);
                /*HITORIA*/
        DB::table('videos')->insert([
            'nombre' => 'La HISTORIA DE MÉXICO en 10 minutos',
            'duracion' => '9:36',
            'calificacion' => '4',
            'categoria' => 'historia',
            'enlace' => 'https://www.youtube.com/embed/LPyYTHrFdyU',
        ]);
        DB::table('videos')->insert([
            'nombre' => 'Castillo de CHAPULTEPEC | En 14 Minutos',
            'duracion' => '14:20',
            'calificacion' => '4',
            'categoria' => 'historia',
            'enlace' => 'https://www.youtube.com/embed/XWty9HawQF8',
        ]);
        DB::table('videos')->insert([
            'nombre' => 'La CASA BLANCA | En 15 MINUTOS',
            'duracion' => '15:01',
            'calificacion' => '5',
            'categoria' => 'historia',
            'enlace' => 'https://www.youtube.com/embed/qW5YSVIKH0g',
        ]);
                /*CIENCIA*/
        DB::table('videos')->insert([
            'nombre' => '100 Preguntas de CIENCIA General',
            'duracion' => '20:44',
            'calificacion' => '5',
            'categoria' => 'ciencia',
            'enlace' => 'https://www.youtube.com/embed/ygRT7JeY8tk',
        ]);
        DB::table('videos')->insert([
            'nombre' => 'El Gran Misterio de las Matemáticas',
            'duracion' => '52:09',
            'calificacion' => '4',
            'categoria' => 'ciencia',
            'enlace' => 'https://www.youtube.com/embed/OJRDM9wn-9U',
        ]);
        DB::table('videos')->insert([
            'nombre' => 'EL VIAJE A LA LUNA',
            'duracion' => '10:38',
            'calificacion' => '4',
            'categoria' => 'ciencia',
            'enlace' => 'https://www.youtube.com/embed/DqaNOm08A44',
        ]);        
                /*ACTIVIDADFISICA*/
        DB::table('videos')->insert([
            'nombre' => 'Tai Chi.',
            'duracion' => '23:21',
            'calificacion' => '5',
            'categoria' => 'actividadfisica',
            'enlace' => 'https://www.youtube.com/embed/KHqKhbn16GI',
        ]);
        DB::table('videos')->insert([
            'nombre' => 'Clase de yoga',
            'duracion' => '29:47',
            'calificacion' => '4',
            'categoria' => 'actividadfisica',
            'enlace' => 'https://www.youtube.com/embed/a376zRhSXXI',
        ]);
        DB::table('videos')->insert([
            'nombre' => 'Meditación guiada',
            'duracion' => '11:30',
            'calificacion' => '5',
            'categoria' => 'actividadfisica',
            'enlace' => 'https://www.youtube.com/embed/O_-IAOE2bxg',
        ]);        
                /*EDUCACION*/
        DB::table('videos')->insert([
            'nombre' => 'Curso básico de Excel',
            'duracion' => '1:06:08',
            'calificacion' => '5',
            'categoria' => 'educacion',
            'enlace' => 'https://www.youtube.com/embed/v_R5SaMTlug',
        ]);
        DB::table('videos')->insert([
            'nombre' => 'Word para principiantes',
            'duracion' => '18:43',
            'calificacion' => '4',
            'categoria' => 'educacion',
            'enlace' => 'https://www.youtube.com/embed/-4ooZlyprmc',
        ]);
        DB::table('videos')->insert([
            'nombre' => 'Redactar una carta',
            'duracion' => '5:19',
            'calificacion' => '4',
            'categoria' => 'educacion',
            'enlace' => 'https://www.youtube.com/embed/Cu-CyIA7BF4',
        ]);        
                /*SALUD*/
        DB::table('videos')->insert([
            'nombre' => 'Cómo armar un botiquín de primeros auxilios',
            'duracion' => '1:30',
            'calificacion' => '5',
            'categoria' => 'salud',
            'enlace' => 'https://www.youtube.com/embed/G_oEGvcmiqs',
        ]);
        DB::table('videos')->insert([
            'nombre' => 'RCP y Primeros Auxilios',
            'duracion' => '53:46',
            'calificacion' => '5',
            'categoria' => 'salud',
            'enlace' => 'https://www.youtube.com/embed/2VfLYaUx-mY',
        ]);
        DB::table('videos')->insert([
            'nombre' => 'Alimentación saludable',
            'duracion' => '5:43',
            'calificacion' => '5',
            'categoria' => 'salud',
            'enlace' => 'https://www.youtube.com/embed/lA81NBYuUTw',
        ]);
    }
}
