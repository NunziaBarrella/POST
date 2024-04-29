<x-layout>

    <div class="container-fluid p-5 bg-info text-center text-black">
        <div class="row justify-content-center">
        <img src="/img/aulab_srl_logo-removebg-preview.png"  alt="Logo" class="img-fluid logo-img">
            <h1 class="dispaly-1 fw-bold">The Aulab Post</h1>

        <h2>l'informazione é qui!</h2>
        </div>
    </div>


<nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
    <div class="container d-flex justify-content-center">
        <ul class="navbar-nav banner-ul">
            @foreach($categories as $category)
                <li class="nav-item banner">
                    <a class="nav-link px-4" href="{{ route('article.byCategory', $category->id) }}">{{ $category->name }}</a>
                </li>
            @endforeach
        </ul>

    </div>
</nav>



@if(session('message'))
    <div class="alert alert-success text-center">
        {{session('message')}}
    </div>
@endif


    <div class="container my-5">
        <div class="row justify-content-center">
            @foreach ($articles as $article)
            <div class="col-12 col-md-3 col-lg-3 m-3 cards ">
                <x-card
                :article='$article'
            />
            </div>

            @endforeach
        </div>
    </div>

    </div>






</x-layout>


<!-- div class="container">
    <div class="row justify-content-center text-center">
        <div class="col-12 col-md-6">
            <h1 class="d-flex justify-content-center text-black fw-bold"></h4>

            <div id="carouselExample" class="carousel slide ">
                <div class="carousel-inner">

                @foreach ($articles as $key=>$article)

                <div class="carousel-item {{$key==0 ? 'active' : '' }} ">


                        <x-card
                        :article='$article'
                    />



                </div>
                @endforeach
            </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Precedente</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Prossimo</span>
                </button>
              </div>
        </div>
    </div>
    <x/layout>
 -->
