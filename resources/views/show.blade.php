<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>
<body>
    <h1>{{$car->brand}}</h1>
    <h2>{{$car->model}}</h2>
    <h3>{{$car->price}}</h3>
    <h4>{{$car->cc}}</h4>
    <h5>{{$car->year_release}}</h5>
    @foreach ($car->optionals as $optional)
        <h6>{{$optional->name}}</h6>
    @endforeach
   
    <a href="{{route('cars.index')}}" class="btn btn-primary">Back</a>



</body>
</html>