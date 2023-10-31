<div class="card my-5">
   <div class="row">
    <div class="col-2">
        <img src="@/{{$article->image}}" alt="Immagine articolo">
    </div>
    <div class="col-8">
        <div class="d-flex align-items-baseline">
            <h3>{{ $article->title }}</h3>
            <span class="mx-2">{{$article->category->name}}</span>
        </div>
        <p>{{$article->body}}</p>
        <span>{{$article->user->name}}</span>
        <span>{{$article->created_at}}</span>
    </div>
</div> 
</div>
