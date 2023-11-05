<x-layout-main>
<h1>Le nostre Auto</h1>
<ul>
    @foreach($cars as $car)
    <li>
       <h4>{{$car->name}}</h4> 
       <ul>
        <li><h6>{{$car->model}}</h6></li>
       </ul>
       
    </li>
    @endforeach

</ul>
</x-layout-main>