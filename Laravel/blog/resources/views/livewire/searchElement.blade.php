<div>
    <input type="text" class="form-control" placeholder="Cerca utente" wire:model.live="search" placeholder="">
    {{$search}}

    @foreach ($list as $element)
    <div>{{ $element->$column }}</div>
    @endforeach
</div>