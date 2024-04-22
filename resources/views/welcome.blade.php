<x-layout>

    <div class="container-fluid p-5 bg-info text-center text-black">
        <div class="row justify-content-center">
        <h1 class="dispaly-1 fw-bold">The Aulab Post</h1>
        <h2>l'informazione é qui!</h2>
        </div>
    </div>


@if(session('message'))
    <div class="alert alert-success text-center">
        {{session('message')}}
    </div>
@endif


<nav class="navbar navbar-expand-lg navbar-light bg-light ">
    <div class="container d-flex justify-content-center">
        <ul class="navbar-nav mr-auto">
            @foreach($categories as $category)
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('article.byCategory', $category->id) }}">{{ $category->name }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</nav>


    <div class="container my-5">
        <div class="row justify-content-center">
            @foreach ($articles as $article)
            <div class="col-12 col-md-5 col-lg-3 m-3 cards">
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
