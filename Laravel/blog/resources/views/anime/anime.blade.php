<x-layout-main>

    <x-slot:title>Generi Anime</x-slot>

    <div class="container mt-5">

        <div class="row">
            <div class="col-lg-4">
                <div class="mb-2">
                    @if($categoryId)
                    <a href="{{ route('anime.genre', $categoryId) }}">Torna alla categoria</a>
                    @else
                    Visualizzo tutti i tag delle varie categorie associate a questo Anime
                    @endif
                </div>

                <img class="img-fluid" src="{{ $anime['images']['jpg']['image_url'] }}" alt="{{ $anime['title'] }}">
            </div>
            <div class="col-lg-8">
                <h1>{{ $anime['title'] }}</h1>

                <div>
                    Punteggio: {{ $anime['score'] }}
                </div>

                <div class="mt-5">
                    {!! nl2br(e($anime['synopsis'])) !!}

                    {{--
                    {!! e('stringa')) !!} <=> {{ 'stringa' }}

                    {!! nl2br(e('stri \n <span>nga</span>')) !!}
                    {!! nl2br('stri \n &lt;span&gt;nga&lt;/span&gt;') !!} 
                    {!! 'stri nga' !!}

                    {{ $nuovaStringa = str_replace(' ', '', $stringa) }} rimuove tutti gli spazi dalla stringa
                    
                    --}}
                </div>
            </div>
        </div>       

    </div>

</x-layout-main>




    
