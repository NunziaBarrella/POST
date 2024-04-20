<x-layout>

<div class="container-fluid p-5 bg-info text-center text-black">
        <div class="row justify-content-center">
        <h1 class="dispaly-1 fw-bold">Bentornato Amministratore!</h1>
        </div>
    </div>

    @if(session ('message'))
    <div class="alert alert-succes text-center">
        {{session ('message')}}
        @endif

        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2>Richieste per ruolo Amministratore</h2>
                    <x-requests-table :roleRequests="$adminRequests" role="amministratore"/>
                </div>
            </div>
        </div>
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2>Richieste per ruolo di Revisore</h2>
                    <x-requests-table :roleRequests="$revisorRequests" role="revisore"/>
                </div>
            </div>
        </div>
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2>Richieste per ruolo di Redattore</h2>
                    <x-requests-table :roleRequests="$writerRequests" role="writer"/>
                </div>
            </div>
        </div>
    </div>

</x-layout>
