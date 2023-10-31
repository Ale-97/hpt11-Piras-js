@vite('resources/css/card-Category.css')
<div class="col-2 d-flex align-items-center justify-content-between py-1 m-2">

    <div class="mx-4" id="categoryName">
        {{ $category->name }}
    </div>
    <div class="d-flex align-items-center">
    <a href="{{ route('categories.edit', $category) }}"><i class="bi bi-pencil-square"></i></a>
        <form action="{{ route('categories.destroy', $category) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit"><i class="bi bi-trash-fill"></i></button>
        </form>

    </div>
</div>