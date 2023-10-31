
<div>
    <h1 class="mb-4">{{$title}} Categoria</h1>

    @if($title=="Modifica")
    <form class="row g-3" action="{{ route('categories.update', $category) }}" method="POST">
        @csrf
        @method('PUT')
        @else
        <form class="row g-3" action="{{ route('categories.store') }}" method="POST">
        @csrf
        @endif
        <div class="col-md-12">
            <label for="name" class="form-label">Titolo</label>
            @if($title=="Modifica")
            <input type="text" name="name" id="name" value="{{ old('name', $category->name) }}" class="form-control" maxlength="40">
            @else
            <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control" maxlength="40">
            @endif
            @error('name') <span class="text-danger fw-bold small">{{ $message }}</span> @enderror
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">{{$title}}</button>
        </div>
    </form>
</div>