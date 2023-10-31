<x-layout-main>

    <h1>{{ $article['title'] }}</h1>

    <h2>{{ $article->category->name}}</h2>
    <p>
        {{$article['description']}}
    </p>


</x-layout-main>