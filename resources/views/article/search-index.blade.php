<x-layout>

    <div class="container-fluid p-5 bg-info text-center text-black">
        <div class="row justify-content-center">
            <div class="dispaly-1 fw-bold h1">
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
