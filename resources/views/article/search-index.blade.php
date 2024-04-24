<x-layout>
    <div class="container fluid p5 bg-info text-center text-white">
        <div class="row justify-content-center">
            <div class="display-1 bg-info fw-bold text-black d-flex">
                Tutti gli articoli per {{$query}}
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            @foreach ($articles as $article)
            <div class="col-12 col-md-5 col-lg-3 m-3">
                <x-card
                :article='$article'

            />
            </div>

            @endforeach
        </div>
    </div>
</x-layout>
