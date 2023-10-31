<div class="card">
    <div class="card-body">
        <h3>{{ $article->title }}</h3>
        <p>{{ $article->description }}</p>
        <div class="mt-5">
            <a href="{{ route('articles.show', $article->id) }}" class="btn btn-sm btn-primary">Visualizza</a>
            <a href="{{ route('articles.edit', $article) }}" class="btn btn-sm btn-primary">Modifica</a>
            
            <form action="{{ route('articles.destroy',$article) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-primary my-2">Elimina</button>
            </form>
        </div>
    </div>
</div>