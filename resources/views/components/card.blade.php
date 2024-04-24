<div class="card">
    <img src="{{Storage::url($article->image)}}" alt="" class="card-img-top">
    <div class="card-body">
        <h5 class="card-title">{{$article->title}}</h5>
        <p class="card-text">{{$article->subtitle}}</p>
        @if($article->category)
        <a href="{{route('article.byCategory',['category'=>$article->category->id])}}" class="small text-muted d-flex justify-content-center align-items-center  my-2">{{$article->category->name}}</a>
        @else
        <p class="small text-muted fst-italic text-capitalize">
            Non categorizzato
        </p>
        @endif

        @if ($article->tags)
        <p class="small fst-italic text-capitalize">
            @foreach ($article->tags as $tag )
            #{{$tag->name}}
            @endforeach
        </p>
        @endif

    </div>
    <div class="my-2">Creato il: {{$article->created_at->format('d/m/Y')}} da <a href="{{route('article.byUser',['user'=>$article->user->id])}}">{{$article->user->name}}</a>
    </div>
</div>
