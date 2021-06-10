<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h1>Ecco i film da vedere!!!!</h1>

    <ul>

        
        @foreach ($movies as $movie)
            <li>
                <div>{{$movie->title}} - {{$movie->original_title}} - data uscita: {{$movie->date}} - voto: {{$movie->vote}} </div>  
            </li>                
        @endforeach
        
    </ul>
</body>
</html>