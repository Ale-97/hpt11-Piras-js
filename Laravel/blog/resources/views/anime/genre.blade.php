<x-layout-main>

    <x-slot:title>Generi Anime</x-slot>

    <div class="container mt-5">

        <h1>Elenco Anime</h1>

        <ul>
            @foreach($anime as $anime)
            <li><a href="{{ route('anime.anime', ['id' => $anime['mal_id'], 'category_id' => $categoryId]) }}"
            >{{ $anime['title'] }}</a></li>
            @endforeach
        </ul>

        {{-- questa parte non funziona perché $anime non è più l'array iniziale
        <ul>
            @foreach($anime as $anime)
            <li>{{ $anime['title'] }}</li>
            @endforeach
        </ul>
        --}}

    </div>

</x-layout-main>




    
