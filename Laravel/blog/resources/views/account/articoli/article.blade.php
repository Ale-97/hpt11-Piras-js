<x-layout-main>

    <h1>{{ $article['title'] }}</h1>

    @if(!is_null($article->categories))
            @foreach($article->categories as $category)
            <span class="mx-2">{{$category->name}}</span>
            @endforeach
            @endif
    <p>
        {{$article['description']}}
    </p>


</x-layout-main>