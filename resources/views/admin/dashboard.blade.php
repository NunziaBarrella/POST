<x-layout>


<div class="container-fluid p-5 bg-info text-center text-black">
        <div class="row justify-content-center">
        <h1 class="dispaly-1 fw-bold">Bentornato Amministratore!</h1>
        </div>
    </div>

    <div class="container-fluid p-5 text-center text-black">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
    <div class="container card_adm align-items-center" id="card_adm">
    <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
        Richieste per il ruolo di Amministratore
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <x-requests-table :roleRequests="$adminRequests" role="amministratore"/>
        </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Richieste per il ruolo di Revisore
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <x-requests-table :roleRequests="$revisorRequests" role="revisore"/>
          </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Richieste per il ruolo di Redattore
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <x-requests-table :roleRequests="$writerRequests" role="writer"/>
          </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseTwo">
        Tags della piattaforma
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <x-metainfo-table :metaInfos="$tags" metaType="tags"/>
          </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseTwo">
        Le categorie della piattaforma
      </button>
    </h2>
    <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <x-metainfo-table :metaInfos="$categories" metaType="categories"/>
          </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseTwo">
        Aggiungi una nuova categoria alla piattaforma
      </button>
    </h2>
    <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <form class="d-flex" action="{{route('admin.storeCategory')}}"  method="POST">
                     @csrf
                        <input type="text" name="name" class="form-control me-2" placeholder="Inserisci una nuova categoria">
                        <button type="submit" class="btn bg-info text-black fw-bold"><i class="fa-regular fa-circle-check"></i></button>
                    </form>
          </div>
    </div>
  </div>
</div>
</div>
</div></div></div>


       <!--  <div class="container-fluid p-5 bg-info text-center text-black">
            <div class="row justify-content-center">
            <h1 class="dispaly-1 fw-bold">Bentornato Amministratore!</h1>
            </div>
        </div>




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


        <div class="container my-5">
            <div class="row justify-content-center">
                 <div class="col-12">
                    <h2>Tags della piattaforma</h2>
                     <x-metainfo-table :metaInfos="$tags" metaType="tags"/>
                </div>
             </div>

        </div>


        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-12">
                     <h2>Le categorie della piattaforma</h2>
                     <x-metainfo-table :metaInfos="$categories" metaType="categories"/>
                     <form class="d-flex" action="{{route('admin.storeCategory')}}"  method="POST">
                     @csrf
                        <input type="text" name="name" class="form-control me-2" placeholder="Inserisci una nuova categoria">
                        <button type="submit" class="btn btn-success text-black">Aggiungi</button>
                    </form>
                </div>
                </div>

        </div>


        @if(session ('message'))
                <div class="alert alert-succes text-center">
             {{session ('message')}}
             @endif
                </div>

             @if($errors->any())
                <div class="alert alert-danger text-center fw-bold">
                  <ul>
                 @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
                    </ul>
                 </div>
                 @endif -->

        </x-layout>
