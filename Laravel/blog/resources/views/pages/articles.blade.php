<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Articoli</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>{{ $title }}</h1>

    <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('articles') }}">Articoli</a></li>
        <li><a href="{{ route('whoIAm') }}">Chi siamo</a></li>
        <li><a href="{{ route('contacts') }}">Contatti</a></li>
    </ul>

    <div class="mt-5 container">
        <div class="row g-3">
            {{--
                Commento blade
                Questa parte non verrà inviata al client
            --}}
            @foreach($articles as $article)
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h3>{{ $article['title'] }}</h3>
                                <div class="mt-5">
                                    <a href="{{ route('article', $article['id']) }}" class="btn btn-sm btn-primary">Visualizza</a>
                                </div>
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>
    </div>
</body>
</html>