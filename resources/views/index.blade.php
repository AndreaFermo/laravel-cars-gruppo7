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
    <div class="container">
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Brand</th>
                        <th scope="col">Model</th>
                        <th scope="col">Price</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cars as $car)
                        <tr>
                            <th scope="row">{{$car->id}}</th>
                            <td>{{$car->brand}}</td>
                            <td>{{$car->model}}</td>
                            <td>{{$car->price}}</td>
                            <td><a href="{{route('cars.show', ['car'=> $car->id])}}" class="btn btn-primary">SHOW</a></td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
