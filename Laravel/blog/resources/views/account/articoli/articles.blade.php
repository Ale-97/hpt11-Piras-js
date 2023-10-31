<x-layout-main>
    <h1>{{ $title }} <a href="{{ route('articles.create') }}"><i class="bi bi-plus-square"></i></a></h1>
    
    <div class="mt-5 container">
        <div class="row g-3">
            @foreach(auth()->user()->articles as $article)
            <div class="col-md-4">
                <x-article-card :$article />
            </div>
            @endforeach
        </div>
    </div>

</x-layout-main>