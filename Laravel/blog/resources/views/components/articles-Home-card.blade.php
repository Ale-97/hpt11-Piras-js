<div class="card my-5">
   <div class="row">
    <div class="col-2">
        <img src="@/{{$article->image}}" alt="Immagine articolo">
    </div>
    <div class="col-8">
        <div class="d-flex align-items-baseline">
            <h3>{{ $article->title }}</h3>
            @if(!is_null($article->categories))
            @foreach($article->categories as $category)
            <span class="mx-2">{{$category->name}}</span>
            @endforeach
            @endif
        </div>
        <p>{{$article->body}}</p>
        @if(!is_null($article->categories))
        <span>{{$article->user->name}}</span>
        @endif
        <span>{{$article->created_at}}</span>
    </div>
</div> 
</div>
