<div>
    <h1 class="mb-4">{{$title}} articolo</h1>

    <x-success />

    <form class="row g-3" action="{!!$title=='Crea'?   route('articles.store') : route('articles.update', $article) !!}" enctype="multipart/form-data" method="POST">
        @csrf
        @if($title=="Modifica")
        @method('PUT')
        @endif
        <div class="col-md-12">
            <label for="title" class="form-label text-primary fw-bold">Titolo</label>
            <input type="text" name="title" id="title" value="{!!$title=='Crea'?  old('title') : old('title', $article->title) !!}" class="form-control @error('category') is-invalid @enderror" maxlength="50">
            @error('title') <span class="text-danger small">{{ $message }}</span> @enderror
        </div>

        <div class="col-md-12 my-3">
            @foreach($categories as $category)
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="{{ $category->id }}" id="flexCheckDefault" name="categories[]" @if($title != 'Crea')@checked($article->categories->contains($category->id)) @endif >
                <label class="form-check-label" for="flexCheckDefault">
                    {{$category->name}}
                </label>
            </div>
            @endforeach
            @error('categories') <span class="text-danger small">{{ $message }}</span> @enderror
            <!-- 

            <label for="category" class="form-label text-primary fw-bold ">Categoria</label>
            <select name="category_id" id="category_id" class="form-control">
                <option value="">--- scegli una categoria ---</option>
                @foreach($categories as $category)
                <option value="{{ $category->id }}" @selected($title=='Crea'? $category->id == old('category_id') : $category->id == old('category_id',$article->category_id))
                    >{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category_id') <span class="text-danger small">{{ $message }}</span> @enderror -->



        </div>
</div>
<div class="col-12  my-3"">
    <label for=" inputAddress" class="form-label text-primary fw-bold">Carica un immagine</label>
    <div>
        <input type="file" name="image" id="image">
    </div>
</div>
<div class="col-12">
    <label for="description" class="form-label text-primary fw-bold">Breve descrizione</label>
    <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" maxlength="250">{!!$title=='Crea'?  old('description') : old('description', $article->description) !!}</textarea>
    @error('description') <span class="text-danger small">{{ $message }}</span> @enderror
</div>
<div class="col-12">
    <label for="body" class="form-label text-primary fw-bold">Corpo dell'articolo</label>
    <textarea name="body" id="body" class="form-control @error('body') is-invalid @enderror" rows="10" maxlength="5000">{!!$title=='Crea'?  old('body') : old('body', $article->body) !!}</textarea>
    @error('body') <span class="text-danger small">{{ $message }}</span> @enderror
</div>
<div class="col-12">
    <button type="submit" class="btn btn-primary">{{$title}}</button>
</div>
</form>
</div>