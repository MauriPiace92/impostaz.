<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset("css/app.css")}}">
</head>
<body>
    <div class="container">
        <h1>I Migliori Film della Storia:</h1>

        <ul class="menu">

            
            @foreach ($movies as $movie)
                <li>
                    <div>{{$movie->title}} - {{$movie->original_title}} - data uscita: {{$movie->date}} - voto: {{$movie->vote}} </div>  
                </li>                
            @endforeach
            
        </ul>
    </div>
</body>
</html>