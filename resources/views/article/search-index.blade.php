<x-layout>
    <div class="container fluid p5 bg-info text-center text-white">
        <div class="row justify-content-center">
            <div class="h1 display-1">
                Tutti gli articoli per: {{$query}}
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            @foreach ($articles as $article)
            <div class="col-12 col-md-5 col-lg-3 m-3">
                <x-card
                title="{{$article->title}}"
                subtitle="{{$article->subtitle}}"
                image="{{$article->image}}"
                category="{{$article->category->name}}"
                data="{{$article->created_at->format('d/m/Y')}}"
                user="{{$article->user->name}}"
                url="{{route('article.show',compact('article'))}}"
                urlCategory="{{route('article.byCategory',['category'=>$article->category->id])}}"
                urlUser="{{route('article.byUser',['user'=>$article->user->id])}}"
            />
            </div>

            @endforeach
        </div>
    </div>
</x-layout>
