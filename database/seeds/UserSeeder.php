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
        DB::table('videos')->insert([
            'nombre' => 'La tecnología que cambia nuestra vida',
            'duracion' => '13:17',
            'calificacion' => '5',
            'categoria' => 'tecnologia',
            'enlace' => 'https://www.youtube.com/embed/AU_m-7dDVR8',
        ]);
        DB::table('videos')->insert([
            'nombre' => 'La tecnología que cambia nuestra vida',
            'duracion' => '13:17',
            'calificacion' => '5',
            'categoria' => 'tecnologia',
            'enlace' => 'https://www.youtube.com/embed/AU_m-7dDVR8',
        ]);
        DB::table('videos')->insert([
            'nombre' => 'La tecnología que cambia nuestra vida',
            'duracion' => '13:17',
            'calificacion' => '5',
            'categoria' => 'tecnologia',
            'enlace' => 'https://www.youtube.com/embed/AU_m-7dDVR8',
        ]);
        DB::table('videos')->insert([
            'nombre' => 'La tecnología que cambia nuestra vida',
            'duracion' => '13:17',
            'calificacion' => '5',
            'categoria' => 'tecnologia',
            'enlace' => 'https://www.youtube.com/embed/AU_m-7dDVR8',
        ]);
    }
}
