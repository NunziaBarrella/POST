<div class="card">
    <img src="{{ Storage::url($image)}}" alt="" class="card-img-top">
    <div class="card-body">
        <h5 class="card-title">{{$title}}</h5>
        <p class="card-text">{{$subtitle}}</p>
        @if($category)
        <a href="{{$urlCategory}}" class="small text-muted d-flex justify-content-center align-items-center">{{$category}}</a>
        @else
        <p class="small text-muted fst-italic text-capitalize">
            Non categorizzato
        </p>
        @endif

        @if ($tags)
        <p class="small fst-italic text-capitalize">
            @foreach ($tags as $tag )
            {{ $tag->name}}
            @endforeach
        </p>
        @endif

    </div>
    <div class="card-footer text-muted d-flex justify-content-center align-items-center">
        Scritto il {{$data}} da {{$user}}
        <a href="{{$url}}" class="btn bg-info text-black">Leggi l'articolo</a>

    </div>
</div>
