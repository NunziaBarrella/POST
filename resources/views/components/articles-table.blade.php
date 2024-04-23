<table class="table table-striped table-hover border">
    <thead class="table-dark">
        <tr>
            <th scope="col">n</th>
            <th scope="col">Titolo</th>
            <th scope="col">Sottotitolo</th>
            <th scope="col">Redattore</th>
            <th scope="col">Azione</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($articles as $article)
        <tr>
            <th scope="row">{{$article->id}}</th>
            <td>{{$article->title}}</td>
            <td>{{$article->subtitle}}</td>
            <td>{{$article->user->name}}</td>
            <td>

            @if (is_null($article->is_accepted))
            <a href="{{route('article.show' , compact('article'))}}" class="btn bg-info text-black">Leggi l'articolo</a>
            <div class="d-flex justify-content-between">
                <form action="{{route('revisor.acceptArticle' , compact ('article'))}}" method="POST">
                @csrf
            <button class="btn bg-info text-black">Accetta articolo</button>
            </form>
            <form action="{{route('revisor.rejectArticle' , compact ('article'))}}" method="POST">
                @csrf
            <button class="btn bg-info text-black">Rifiuta articolo</button>
            </form>
            @else
            <form action="{{route('revisor.undoArticle' , compact ('article'))}}" method="POST">
                @csrf
            <button class="btn bg-info text-black border p-2 center">Riporta in revisione</button>

            </form>
            @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
