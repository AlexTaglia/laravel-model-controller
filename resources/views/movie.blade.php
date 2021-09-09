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
    <title>laravel model controller</title>
</head>
<body>
    <h1>Avengers films</h1>

    @foreach ($allMovies as $movie)
        <div class="film-section">
            <h4>{{$movie->title}}</h4>
            <p>{{$movie->directed_by}}</p>
            <p>{{$movie->running_time}}</p>
            <p>{{$movie->release_date}}</p>
            <p>{{$movie->production_company}}</p>
            <p>{{$movie->starring}}</p>
            <p>{{$movie->plot}}</p>
        </div>    
    @endforeach
    
</body>
</html>