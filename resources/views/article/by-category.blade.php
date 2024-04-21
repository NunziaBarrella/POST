<x-layout>
    <div class="container-fluid p5 bg-info text-center text-black bold">
        <div class="row justify-content-center">
            <div class="h1 display-1">
                Categoria {{$category->name}}
            </div>
        </div>
    </div>
    @if (session('message'))
    <div class="alert alert-success">
        {{session('message')}}
        @endif
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            @foreach ($articles as $article)
            <div class="col-12 col-md-3">
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
