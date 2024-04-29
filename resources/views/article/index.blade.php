<x-layout>

    <div class="container-fluid p-5 bg-info text-center text-black">
        <div class="row justify-content-center">
        <h1 class="dispaly-1 fw-bold">Tutti gli articoli</h1>
        </div>
    </div>


   <div class="container my-5">
        <div class="row justify-content-center">
            @foreach ($articles as $article)
            <div class="col-12 col-md-4 mb-4">
                <x-card
                :article='$article'

            />
            </div>

            @endforeach
        </div>

    </div>
</div>
</x-layout>
