<x-layout-main>

    <x-slot:title>{{ $title }}</x-slot>

    <h1>{{ $title }}</h1>    
<!-- 
    <ul id="articles"></ul>
     -->

     @foreach($articles as $article)
     <x-articles-Home-card :$article/>
     @endforeach
     
</x-layout-main>

