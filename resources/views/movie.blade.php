<!DOCTYPE html>
<?php
/*
Create un nuovo progetto Laravel 7 e tramite phpMyAdmin 
create un nuovo database. Importate nel vostro database la 
tabella movies in allegato e inserite le vostre credenziali 
per il database nel file .env.
Create un model Movie e un controller che gestirà la rotta /. All’interno 
della funzione index() del controller, recuperate tutti i film dal 
database e passateli alla view, che quindi li visualizzerà a schermo, 
tramite delle card.

BONUS: Stilare il layout nei dettagli con Sass
*/
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <title>laravel model controller</title>
</head>
<body>
    <div class="container">
        <h1>Avengers films</h1>
    
        @foreach ($allMovies as $movie)
            <div class="film-section">
                
                <h2>{{$movie->title}}</h2>
                <div class="top flex">
                    <div class="img">
                        <img src="{{$movie->poster}}" alt="">
                    </div>
                    <div class="details">
                        <p><b>Diretto da: </b>{{$movie->directed_by}}</p>
                        <p><b>Durata: </b>{{$movie->running_time}} minuti</p>
                        <p><b>Uscita: </b>{{$movie->release_date}}</p>
                        <p><b>Casa di produzione: </b>{{$movie->production_company}}</p>
                        <p><b>Attori principali: </b>{{$movie->starring}}</p>
                    </div>
                </div>

                <div class="bottom">
                    <h4>Trama</h4>
                    <p>{{$movie->plot}}</p>
                </div>
            </div>    
        @endforeach

    </div>
    
</body>
</html>