<x-layout-main>
    <div>
        <h1 class="mb-4">{{$title}} Ordine</h1>

        <x-success />

        <form class="row g-3" action="{!!$order->id?route('orders.update', $order):  route('orders.store')!!}" enctype="multipart/form-data" method="POST">
            @csrf
            @if($order->id)
            @method('PUT')
            @endif

            <div class="col-12">
                <label for="user" class="form-label text-primary fw-bold">Nome e Cognome</label>
                <input type="text" name="user" id="user" class="form-control @error('user') is-invalid @enderror" maxlength="250" value="{{old('user', $order->user)}}">
                @error('user') <span class="text-danger small">{{ $message }}</span> @enderror
            </div>

            <div class="col-12">
                <label for="car" class="form-label text-primary fw-bold ">Auto</label>
                <select name="car_id" id="car_id" class="form-control">
                    <option value="">--- scegli un'auto ---</option>
                    @foreach($cars as $car)
                    <option value="{{ $car->id }}" @selected($car->id == old('car_id') || $car->id == old('car_id',$order->car_id)) >{{ $car->name }}: {{ number_format($car->price, 2, ',', '.')}}€</option>
                    @endforeach
                </select>
                @error('car_id') <span class="text-danger small">{{ $message }}</span> @enderror
            </div>


            <div class="col-md-12 my-3">
                @foreach($accessories as $accessory)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="{{ $accessory->id }}" id="flexCheckDefault" name="accessories[]"  @checked($order->accessories->contains($accessory->id))>
                    <label class="form-check-label" for="flexCheckDefault">
                        {{$accessory->name}}: {{ number_format($accessory->price, 2, ',', '.')}}€
                    </label>
                </div>
                @endforeach
                @error('categories') <span class="text-danger small">{{ $message }}</span> @enderror

            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">{{$title}}</button>
            </div>
        </form>
    </div>
</x-layout-main>