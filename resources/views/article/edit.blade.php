<x-layout>
<div class="container-fluid p-5 bg-info text-center text-black">
        <div class="row justify-content-center">
        <h1 class="dispaly-1">Modifica l' articolo</h1>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="{{route('article.update' , compact('article'))}}" method="post" class="card p-5 shadow" enctype="multipart/form-data">
                    @csrf
                    @method('put')

                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo:</label>
                        <input type="text" name="title" class="form-control" id="title" value="{{$article->title}}">
                    </div>
                    <div class="mb-3">
                        <label for="subtitle" class="form-label">Sottotilo:</label>
                        <input type="text" name="subtitle" class="form-control" id="subtitle" value="{{$article->subtitle}}">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Immagine:</label>
                        <input type="file" name="image" class="form-control" id="image">
                    </div>
                    <div class="mb-3">
                        <label for="tags" class="form-label">Tags:</label>
                        <input name="tags" class="form-control" id="tags" value="{{$article->tags->implode('name' , ',')}}">
                        <span class="small fst-italic">Dividi ogni tag con una virgola</span>
                    <div class="mb-3">
                        <label for="category" class="form-label">Categoria:</label>
                        <select name="category" id="category" class="form-control text-capitalize">
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}" @if($article->category && $category->id == $article->category->id) selected @endif>{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                    <label for="body" class="form-label">Testo:</label>
                    <textarea name="body" id="body" cols="30" rows="7" class="form-control">{{$article->body}}
                    </textarea>
                    </div>

                    <div class="mt-2 d-flex justify-content-center">
                        <button class="btn bg-info border text-black" type="submit">Inserisci un articolo</button>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
