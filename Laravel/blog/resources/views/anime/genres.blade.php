<x-layout-main>

    <x-slot:title>Generi Anime</x-slot>

    <div class="container mt-5">

        <h1>Generi Anime</h1>

        <ul>
            @foreach($genres as $genre)
            <li><a href="{{ route('anime.genre', $genre['mal_id']) }}">{{ $genre['name'] }} {{ $genre['mal_id'] }}</a></li>
            @endforeach
        </ul>

    </div>

</x-layout-main>




    
