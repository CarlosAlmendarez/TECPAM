@extends('layouts.app')

@section('content')

<h1 class="display-3 text-center fw-bolder">
   JUEGOS
</h1>
    <div class="card-text p-5">
        <p class="h4">1.- Haz "click" en el botón izquierdo de tu mouse y arrastra sin soltar desde la primera letra hasta la ultima de la palabra que encuentres </p>
        <p class="h4">2.- La palabra encontrada sera subrayada</p>
        <p class="h4">3.- Si deseas agregar una nueva palabra, haz "click" con el boton izquierdo en el botón "Agregar palabra nueva" y escribe en el recuadro blanco que aparece, la palabra que desees.</p>
        <p class="h4">4.- Enseguida, haz "click" en el botón "Crear nueva sopa de letras"</p>
        <p class="h4">5.- Si deseas saber en donde se encuentran las palabras, haz "click" en el botón "Resolver sopa de letras"</p>
    </div>
    <div id="main" role="main" class="ml-5 mb-5 p-5">
        <div id="puzzle"></div>
        <ul id="words">
            <li><button id="add-word">Agregar palabra nueva</button></li>
        </ul>
        
        <fieldset id="controls">
            <label for="allowed-missing-words">Palabras que pueden faltar:
                <input id="allowed-missing-words" type="number" min="0" max="5" step="1" value="2">
            </label>
            <label for="max-grid-growth" style="visibility: hidden">Tamaño máximo de la sopa :
                <input id="max-grid-growth" type="number" min="0" max="5" step="1" value="5">
            </label>
            <label for="extra-letters">Letras Extra :
                <select id="extra-letters">
                    <option value="secret-word">Palabra Secreta</option>
                    <option value="random" selected>Aleatorias</option>
                </select>
            </label>
            <label for="secret-word">Palabra Secreta :
                <input id="secret-word">
            </label>
            <button id="create-grid">Crear Nueva Sopa de Letras</button>
            <p id="result-message"></p>
            <button id="solve">Resolver Sopa de letras</button>
        </fieldset>
    </div>
    <link href="{{ asset('css/wordfind.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/wordfind.js') }}"></script> 
    <script type="text/javascript" src="{{ asset('js/wordfindgame.js') }}"></script> 
    <script>
    /* Example words setup */
    [
        /*'adorable',
        'comique',
        'curieuse',
        'drole',
        'engagee',
        'enjouee',
        'fidele',
        'futee',
        'radieuse',
        'sensible',
        'sincere',*/
        'complice',
        'creativo',
        'elegante',
        'cafe',
        'joya',
        'motivacion',
        'orden',
        'sensible',
        'sincero',
        'tener',
    ].map(word => WordFindGame.insertWordBefore($('#add-word').parent(), word));
    $('#secret-word').val('LATITUD');

    /* Init */
    function recreate() {
        $('#result-message').removeClass();
        var fillBlanks, game;
        if ($('#extra-letters').val() === 'none') {
            fillBlanks = false;
        } else if ($('#extra-letters').val().startsWith('secret-word')) {
            fillBlanks = $('#secret-word').val();
        }
        try {
            game = new WordFindGame('#puzzle', {
                allowedMissingWords: +$('#allowed-missing-words').val(),
                maxGridGrowth: +$('#max-grid-growth').val(),
                fillBlanks: fillBlanks,
                allowExtraBlanks: ['none', 'secret-word-plus-blanks'].includes($('#extra-letters').val()),
                maxAttempts: 100,
            });
        } catch (error) {
            $('#result-message').text(`😞 ${error}, Trata con palabras más sencillas`).css({color: 'red'});
            return;
        }
        wordfind.print(game);
        if (window.game) {
            var emptySquaresCount = WordFindGame.emptySquaresCount();
            $('#result-message').text(`😃 ${emptySquaresCount ? 'Hay espacios vacios ' : ''}`).css({color: ''});
        }
        window.game = game;
    }
    recreate();

    /* Event listeners */
    $('#extra-letters').change((evt) => $('#secret-word').prop('disabled', !evt.target.value.startsWith('secret-word')));

    $('#add-word').click( () => WordFindGame.insertWordBefore($('#add-word').parent()));

    $('#create-grid').click(recreate);

    $('#solve').click(() => game.solve());
    </script>
@endsection