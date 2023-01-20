<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">

    <title>Home Laravel</title>
</head>
<body>
    <div class="container p-2">
        <div class="text-center">
            <h1>Benvenuto nella sezione Info</h1>
        </div>
        <div class="d-flex justify-content-between">
            <a href="{{route("home")}}">Home</a>
            <a href="{{route("contatti")}}">Contatti</a>
        </div>
    </div>
    <div>
        <ul class="d-flex list-unstyled justify-content-between">
            @foreach ($array as $contatto)
            <li><a href="">{{$contatto}}</a></li>
            @endforeach
        </ul>
    </div>
    
</body>
</html>