<x-layout-main>
    <x-success />
    @if(Request::path()==="categories/create")
    <h2>Categorie Esistenti</h2>
    <div class="row">
        @foreach($categorys as $category)
        <x-card-category :category=$category> </x-card-category>
        @endforeach
    </div>
    @endif
    <x-form-category :$category :$title/>

</x-layout-main>