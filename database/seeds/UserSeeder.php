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


        /*DATOS CURIOSOS
           $table->string('titulo');
            $table->string('texto');
            $table->string('imagen');
            $table->string('categoria'); */
        DB::table('datos')->insert([
            'titulo' => 'La primera WebCam',
            'texto' => ' La primera webcam de la historia fue utilizada para hacer seguimiento de la operación de una máquina de café. Fue implementada en el laboratorio de computación de la Universidad de Cambridge. Los ingenieros querían saber si el café ya estaba listo antes de bajar por él –la máquina se encontraba en otro piso-.',
            'imagen' => 'https://www.abadiadigital.com/wp-content/uploads/2014/11/webcam1.jpg',
            'categoria' => 'tecnologia',
        ]);
         DB::table('datos')->insert([
            'titulo' => 'Contraseñas',
            'texto' => 'Las tres contraseñas más usadas en el mundo son ‘123456’, ‘password’ y ‘12345’, según la empresa experta en aplicaciones de seguridad SplashData.',
            'imagen' => 'https://www.enter.co/wp-content/uploads/2016/05/Contrase%C3%B1a-1024x768.jpg',
            'categoria' => 'tecnologia',
        ]);
        DB::table('datos')->insert([
            'titulo' => 'Leonardo da Vinci era vegetariano.',
            'texto' => 'Hay indicios de que por lo menos durante una parte de su vida da Vinci sí fue vegetariano. Por cierto, era tanto el aprecio de Leonardo hacia los animales que a él le gustaba comprar pájaros enjaulados en los mercados para luego soltarlos.',
            'imagen' => 'https://pavlov.psyciencia.com/2019/05/2e816cc5-leonardo-davinci-tdah.jpg',
            'categoria' => 'arte',
        ]);
        DB::table('datos')->insert([
            'titulo' => 'El nombre completo de Picasso es…',
            'texto' => 'Según los registros del gobierno, el nombre completo del artista español Pablo Picasso es: Diego José Francisco de Paula Juan Nepomuceno María de los Remedios Crispiniano de la Santísima Trinidad Ruiz y Picasso.',
            'imagen' => 'https://megalopolismx.com/images/noticias/202010/un-dia-como-hoy-en-1881-nacio-pablo-ruiz-picasso.jpg',
            'categoria' => 'arte',
        ]);
        DB::table('datos')->insert([
            'titulo' => 'La música y los recuerdos',
            'texto' => 'La música escuchada se guarda en áreas del cerebro diferentes a las de los recuerdos, por eso las personas con Alzheimer son capaces de recordar melodías de su pasado.',
            'imagen' => 'https://pianocoaching.files.wordpress.com/2016/06/musica-para-estimular-el-cerebro.jpg',
            'categoria' => 'musica',
        ]);
        DB::table('datos')->insert([
            'titulo' => 'Instrumentos',
            'texto' => 'Los instrumentos musicales más antiguos datan de hace aproximadamente 32 mil años, son flautas fabricadas con huesos de aves que se encontraron en las cuevas de Isturitz en Francia, y Geissenklösterle, Alemania.',
            'imagen' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDfUzvAVNg8Vx55mzfPOKaqpaolfKY0Oz5bg&usqp=CAU',
            'categoria' => 'musica',
        ]);
        DB::table('datos')->insert([
            'titulo' => 'Las siete maravillas',
            'texto' => 'Las siete Maravillas del Mundo fueron nombradas por primera vez por Antiparo de Sidón en el siglo II AC:  Las pirámides de Giza (Egipto), los jardines colgantes de Babilonia (Irak), la estatua de Zeus en Olimpia (Grecia), el templo de Artemisa en Efeso (Turquía), el mausoleo de Halicarnaso (tumba del rey Mausolo en Turquía), el coloso de Rodas y el faro de Alejandría (Egipto).',
            'imagen' => 'https://sobrehistoria.com//wp-content/uploads/2020/05/7-maravillas-del-mundo.png',
            'categoria' => 'historia',
        ]);
        DB::table('datos')->insert([
            'titulo' => 'Mayor imperio',
            'texto' => 'El imperio mas grande de la historia de la humanidad fue el Imperio Británico, durante el siglo XIX.',
            'imagen' => 'https://www.mercaba.es/articulos/imperialismo_britanico.jpeg',
            'categoria' => 'historia',
        ]);
        DB::table('datos')->insert([
            'titulo' => 'El pulpo tiene 3 corazones',
            'texto' => 'Se usan dos de ellos para bombear sangre a cada uno de sus pulmones y el tercero bombea sangre a todo el cuerpo.',
            'imagen' => 'https://kitchenacademy.es/wp-content/uploads/pulpo.jpg',
            'categoria' => 'ciencia',
        ]);
        DB::table('datos')->insert([
            'titulo' => 'Los saltamontes tienen orejas en el estómago',
            'texto' => 'A cada lado del segmento abdominal, metido justo debajo de las alas, es donde se encuentran estas membranas que vibran en respuesta a las ondas de sonido.  Un pequeño tímpano que permite que los saltamontes escuchen todos los sonidos.',
            'imagen' => 'https://cdnmundo1.img.sputniknews.com/img/109033/21/1090332169_0:102:2741:1824_1920x0_80_0_0_0efe9599461c9000c008232d71d04540.jpg',
            'categoria' => 'ciencia',
        ]);
        DB::table('datos')->insert([
            'titulo' => 'La escuela más grande del mundo',
            'texto' => 'Se encuentra en la India. Se llama City Montessori School y tiene más de 32,000 estudiantes. Su nombre deriva de la educadora italiana María Montessori que sentó las bases para un método de educación alternativo que se basa en fomentar en el alumno un desarrollo integral. ',
            'imagen' => 'https://i.ytimg.com/vi/qcmINpEN5FY/maxresdefault.jpg',
            'categoria' => 'educacion',
        ]);
        DB::table('datos')->insert([
            'titulo' => 'Largas vacaciones',
            'texto' => 'Las vacaciones de verano duran desde mediados de Diciembre hasta principios de marzo en Chile, dando a los niños tres meses de vacaciones.',
            'imagen' => 'https://p4.wallpaperbetter.com/wallpaper/551/299/734/sand-sea-beach-summer-star-hd-wallpaper-preview.jpg',
            'categoria' => 'educacion',
        ]);
        DB::table('datos')->insert([
            'titulo' => 'El yoga no es una religión.',
            'texto' => 'De hecho se utiliza como herramienta en distintas religiones, como el hinduismo o el budismo. Por ello hay gente que lo considera una práctica espiritual.',
            'imagen' => 'https://www.ecestaticos.com/image/clipping/43049b528576b317cc5a5bc183d7c065/yoga-para-un-vientre-plano-las-5-posturas-que-hacer-a-diario.jpg',
            'categoria' => 'actividadfisica',
        ]);
        DB::table('datos')->insert([
            'titulo' => 'Partido de fútbol',
            'texto' => 'La mayor cantidad de aficionados que asistieron a un partido de fútbol tuvo lugar en 1950 en Río de Janeiro. Un total de 199.854 personas vieron a Brasil jugar contra Uruguay en la Copa del Mundo.',
            'imagen' => 'http://as01.epimg.net/mexico/imagenes/2018/03/19/futbol/1521430720_117722_1521430791_noticia_normal.jpg',
            'categoria' => 'actividadfisica',
        ]);
        DB::table('datos')->insert([
            'titulo' => 'Una siesta',
            'texto' => 'Una siesta de 60 minutos podría mejorar sus niveles de alerta, incrementar su buen humor y su productividad.',
            'imagen' => 'https://brainsnursery.com/wp-content/uploads/2019/07/importancia-de-echar-la-siesta-en-los-nin%CC%83os-1024x683-1.jpeg',
            'categoria' => 'salud',
        ]);
        DB::table('datos')->insert([
            'titulo' => 'Mayor autoestima y equilibrio psicológico',
            'texto' => 'Durante el ejercicio físico aumenta la producción de endorfinas, que nos proporcionan una sensación placentera y de bienestar. Por lo tanto, aumenta también nuestra autoestima y el concepto que tenemos de nosotros mismos.  ',
            'imagen' => 'https://gacetamedica.com/wp-content/uploads/2020/03/GettyImages-1067001954.jpg',
            'categoria' => 'salud',
        ]);   
    }
}
