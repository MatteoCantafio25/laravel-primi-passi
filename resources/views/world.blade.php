<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Matteo Cantafio">
    <meta name="description" content="Second">
    <title>Second</title>
</head>
    <body>
    <h1>Ciao Mondo!</h1>
    <h2>Esempi lingue nel mondo</h2>
    @foreach ($languages as $lang)
        <p>{{$lang}}</p>
    @endforeach
    <a href="{{route('home')}}">Vai alla home</a>
    </body>
</html>