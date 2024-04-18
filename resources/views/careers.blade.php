<x-layout>
<div class="container-fluid p-5 bg-info text-center text-black">
        <div class="row justify-content-center">
        <h1 class="dispaly-1 fw-bold">Lavora con noi</h1>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center align-items-center border roundend p-2 shadow">
            <div class="col-12 col-md-6">
                <h2>Lavora come amministratore</h2>
                <p>Se sei un individuo creativo, appassionato di notizie e desideroso di fare la differenza nel mondo del giornalismo online, inviaci il tuo curriculum vitae e una lettera di presentazione che evidenzi le tue competenze e la tua motivazione per questa posizione. Siamo ansiosi di conoscerti e di accoglierti nel nostro team dinamico e appassionato!Invia il tuo curriculum vitae a lavoro@theaulabpost.it entro il 30/04/2021.Grazie per il tuo interesse a far parte del nostro team!</p>
                <h2>Lavora come revisore articoli</h2>
                <p>Se sei un individuo attento ai dettagli, con una passione per la correttezza e la chiarezza nei contenuti, inviaci il tuo curriculum vitae e una breve lettera di presentazione che evidenzi le tue competenze e la tua motivazione per questa posizione.Invia il tuo curriculum vitae a lavoro@theaulabpost.it entro il 30/04/2024.Siamo entusiasti di conoscere individui talentuosi e motivati per unirsi al nostro team!Grazie per il tuo interesse a far parte della nostra squadra!</p>
                <h2>Lavora come Redattore</h2>
                <p>Sei appassionato di scrivere e di condividere idee stimolanti? Abbiamo un'opportunità per te! Stiamo cercando uno Scrittore di Articoli creativo e talentuoso per arricchire il nostro sito web con contenuti coinvolgenti e informativi.Invia il tuo curriculum vitae a lavoro@theaulabpost.it entro il 30/04/2024.Siamo entusiasti di conoscere individui talentuosi e motivati per unirsi al nostro team!Grazie per il tuo interesse a far parte della nostra squadra!</p>
            </div>
            <div class="col-12 col-md-6">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{$error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif


                <form action="{{route('careers.submit')}}" method="post" class="p-5">
                    @csrf
                    <div class="mb-3">
                        <label for="role" class="form-label">Per quale ruolo ti vuoi candidare?</label>
                        <select name="role" id="role" class="form-control">
                            <option value="">Scegli qui</option>
                            <option value="admin">Amministratore</option>
                            <option value="revisor">Revisore Articoli</option>
                            <option value="writer">Redattore</option>
                        </select>
                    </div>
                    <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email" value="{{old('email') ?? Auth::user()->email}}">
                    </div>
                    <div class="mb-3">
                    <label for="message" class="form-label">Parlaci di te</label>
                    <textarea name="message" id="message" cols="30" rows="7" class="form-control">{{old ('message')}}</textarea>
                    </div>
                    <div class="mt-2">
                        <button class="btn bg-info text-black fw-bold border ">Invia la tua candidatura</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
