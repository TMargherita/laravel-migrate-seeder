<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Scheda Fumetto</title>
</head>
<body>
    <div class="d-flex justify-content-center"><h4>Scheda del Fumetto</h4></div>
    <div class="container d-flex justify-content-center">
        <div class="row">

            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{$comic->cover}}" alt="Card image cap">
                <div class="card-body">
                    <ul>
                        <li>{{$comic->title}}</li>
                        <li>{{$comic->original_title}}</li>
                        <li>{{$comic->author_id}}</li>
                        <li>{{$comic->number}}</li>
                        <li>{{$comic->n_pages}}</li>
                        <li>{{$comic->edition}}</li>
                        <li>{{$comic->reading}}</li>
                        <li>{{$comic->price}}</li>
                        <li>{{$comic->color}}</li>
                        <li>{{$comic->release}}</li>
                    </ul>
                 
                    <a href="{{route('comics.index')}}" class="btn btn-primary">Home</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>