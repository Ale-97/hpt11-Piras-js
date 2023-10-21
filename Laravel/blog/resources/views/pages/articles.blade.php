<x-layout-main>
    <!-- <a href="{{ route('createArticle')}}"> -->
        <a href="{{ route('account.articles.create')}}">
        <button>
            add article
        </button>
    </a>
    <div class="row g-3">
        @foreach($articles as $article)
        <x-Card :title="$article['title']" :category="$article['category']" :route="route('article', $article['id'])"></x-Card>
        @endforeach
    </div>

</x-layout-main>