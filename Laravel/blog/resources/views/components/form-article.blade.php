<div>
    <h1 class="mb-4">Crea un nuovo articolo</h1>

    <x-success />

    <form class="row g-3" action="{{ route('account.articles.store') }}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="col-md-12">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}" class="form-control @error('category') is-invalid @enderror" maxlength="50">
            @error('title') <span class="text-danger small">{{ $message }}</span> @enderror
        </div>
        <div class="col-md-12">
            <label for="category" class="form-label">Categoria</label>
            <input type="text" name="category" id="category" value="{{ old('category') }}" class="form-control @error('category') is-invalid @enderror" maxlength="40">
            @error('category') <span class="text-danger small">{{ $message }}</span> @enderror
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Carica un immagine</label>
            <div>
                <input type="file" name="image" id="image">
            </div>
        </div>
        <div class="col-12">
            <label for="description" class="form-label">Breve descrizione</label>
            <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" maxlength="250">{{ old('description') }}</textarea>
            @error('description') <span class="text-danger small">{{ $message }}</span> @enderror
        </div>
        <div class="col-12">
            <label for="body" class="form-label">Corpo dell'articolo</label>
            <textarea name="body" id="body" class="form-control @error('body') is-invalid @enderror" rows="10" maxlength="5000">{{ old('body') }}</textarea>
            @error('body') <span class="text-danger small">{{ $message }}</span> @enderror
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
    </form>
</div>