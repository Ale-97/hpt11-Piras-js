<x-layout-main>
    <x-success />

    <h1 class="mx-4">Ordine N°{{$order->id}}</h1>
    <div>
        L'ordine include :
        <h4>{{$order->car->name}} {{$order->car->model}}</h4>
    </div>
    <h3>Il tuo ordine include i seguenti accessorio</h3>
    <ul>
    @foreach($order->accessories as $accessory)
   <li> {{$accessory->name}},</li>
    @endforeach
        
    </ul>


</x-layout-main>