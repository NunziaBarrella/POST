<x-layout>
    <div class="container-fluid p5 bg-info text-center">
        <div class="row justify-content-center">
            <div class="h1 container-fluid p-5 bg-info text-center text-black fw-bold">
                Utente {{$user->name}}
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
                :article='$article'
            />
            </div>

            @endforeach
        </div>
    </div>
</x-layout>
