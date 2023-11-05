<x-layout-main>
    <x-success />

    <div class="d-flex align-items-center">
        <h1 class="mx-3">I tuoi Ordini</h1>
        <a href="{{route('orders.create')}}"><button>Crea Articolo</button></a>
    </div>

    <ul class="my-4">
        @foreach($orders as $order)
        <li class="d-flex">
            <h4 class="mx-4">Ordine N°{{$order->id}}</h4>
            L'ordine include: Auto:{{$order->car->name}}
            <a class="mx-4" href="{{route('orders.show', $order)}}"><button>visualizza il tuo Ordine</button></a>
            <a class="mx-4" href="{{route('orders.edit', $order)}}"><button>Modifica Ordine</button></a>
            <form action="{{route('orders.destroy', $order)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Elimina ordine</button>
            </form>
        </li>

        @endforeach

    </ul>
</x-layout-main>