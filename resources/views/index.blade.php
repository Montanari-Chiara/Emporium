<x-layout>
    @if (session()->has('errorMessage'))
        <div class="alert alert-danger text-center shadow rounded w-50">
            {{ session('errorMessage') }}
        </div>
    @endif
    <header class="container-fluid pt-4 vh-100 bg-5">
        <div class="row justify-content-center align-items-center flex-column h-100">

            {{-- titolo --}}
            <div class="col-12 c-2">

                <h1 class=" display-1 text-center dark" data-aos="fade-down" data-aos-delay="300" data-aos-duration="2000">
                    EMPORIUM <span class="c-2 shop dark">SHOP</span>
                </h1>
            </div>

            {{-- MESSAGGIO DI SUCCESSO PER LA CANDIDATURA COME REVISORE --}}
            @if (session()->has('message'))
                <div class="col-12 d-flex justify-content-center">
                    <div class="alert alert-success text-center shadow rounded w-50 mb-1 position-relative">
                        {{ session('message') }}
                        <button type="button" class="btn-close position-absolute mt-3 me-3 top-0 end-0"
                            data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            @endif

            {{-- MESSAGGIO DI SUCCESSO GENERICO --}}
            <x-success />

            {{-- carosello categorie --}}
            <div class="col-12 overflow-hidden">
                <swiper-container class="mySwiper px-lg-5" thumbs-swiper=".mySwiper2-index" space-between="10"
                    loop="true" autoplay-delay="12000" autoplay-pause-on-mouse-enter="true">
                    <swiper-slide class="rounded-3 my-1 overflow-hidden">
                        <div class="row justify-content-center p-0">
                            <div class="col-12 container-img-card p-0 position-relative">
                                <img src="{{ Storage::url('categories-img/all.png') }}" alt="home" class="">

                                <div
                                    class="d-flex flex-column justify-content-center align-items-center text-slide-header fs-header p-5">
                                    {{-- @auth
                                        <h4 class="typewriter c-2 mb-3">
                                            Ciao {{ Auth::user()->name }}, sei pronto a fare ottimi affari anche
                                            oggi?
                                        </h4>
                                    @else
                                        <h4 class="typewriter c-2 mb-3">
                                            Compra e vendi prodotti, nuovi e usati, in pochi click.
                                        </h4>
                                    @endauth --}}
                                    <div class="c-2">
                                        Emporium Shop è un marketplace innovativo dove puoi vendere e acquistare
                                        prodotti di ogni categoria, dai dispositivi tecnologici all'abbigliamento, dagli
                                        articoli per la casa ai prodotti artigianali. Unisciti alla nostra community di
                                        venditori e acquirenti per vivere il meglio
                                        del commercio online!
                                    </div>
                                    {{-- search --}}
                                    <form action="{{ route('article.search') }}" method="GET" role="search"
                                        class="d-flex w-100 mt-3">
                                        <div class="input-group">
                                            <input type="search" name="query" class="form-control"
                                                placeholder="{{ __('ui.cerca') }}" aria-label="search"
                                                value="{{ $query }}">
                                            <button class="input-group-text btn " type="submit" id="basic-addon2">
                                                <i class="fa-solid fa-magnifying-glass"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </swiper-slide>
                    @foreach ($categories as $category)
                        <swiper-slide class="rounded-3 my-1 overflow-hidden">
                            <div class="row justify-content-center p-0">
                                <div class="col-12 container-img-card p-0 position-relative">
                                    <img src="{{ Storage::url($category->img) }}"
                                        alt="immagine di {{ $category->name }}" class="radius">
                                    <div
                                        class="d-flex flex-column justify-content-center align-items-center text-slide-header p-5">
                                        @auth
                                            <h4 class="typewriter c-2 mb-3 fs-header">
                                                Ciao {{ Auth::user()->name }}, sei pronto a fare ottimi
                                                affari anche
                                                oggi?
                                            </h4>
                                        @else
                                            <h4 class="typewriter c-2 mb-3 fs-header">
                                                Compra e vendi prodotti, nuovi e usati, in pochi click.
                                            </h4>
                                        @endauth
                                        @switch($category->name)
                                            @case('Elettronica')
                                                <h5 class="c-2 mb-3 fs-header typewriter-text2">La tua lavatrice fa i
                                                    capricci?
                                                    Sostituiscila con una della categoria
                                                    "{{ __("ui.$category->name") }}"</h5>
                                            @break

                                            @case('Abbigliamento')
                                                <h5 class="c-2 mb-3 fs-header typewriter-text2">Hai l'armadio vuoto?
                                                    Riempilo con gli articoli della
                                                    categoria "{{ __("ui.$category->name") }}"</h5>
                                            @break

                                            @case('Bellezza')
                                                <h5 class="c-2 mb-3 fs-header typewriter-text2">Cura la tua pelle con
                                                    i
                                                    prodotti della categoria
                                                    "{{ __("ui.$category->name") }}"</h5>
                                            @break

                                            @case('Giardinaggio')
                                                <h5 class="c-2 mb-3 fs-header typewriter-text2">Hai il pollice verde?
                                                    Dai
                                                    sfogo alla tua fantasia con la categoria
                                                    "{{ __("ui.$category->name") }}"
                                                </h5>
                                            @break

                                            @case('Giocattoli')
                                                <h5 class="c-2 mb-3 fs-header typewriter-text2">Giochi sparsi per
                                                    casa
                                                    non sono abbastanza? Aggiungine
                                                    altri dalla categoria "{{ __("ui.$category->name") }}"</h5>
                                            @break

                                            @case('Sport')
                                                <h5 class="c-2 mb-3 fs-header typewriter-text2">Sei un tipo atletico?
                                                    Dai
                                                    un'occhiata alla categoria
                                                    "{{ __("ui.$category->name") }}"</h5>
                                            @break

                                            @case('Tecnologia')
                                                <h5 class="c-2 mb-3 fs-header typewriter-text2">Dispositivo vecchio?
                                                    Guarda le nostre offerte nella
                                                    categoria "{{ __("ui.$category->name") }}"</h5>
                                            @break

                                            @case('Libri e riviste')
                                                <h5 class="c-2 mb-3 fs-header typewriter-text2">Trova il libro dei
                                                    tuoi
                                                    sogni! Dai un occhiata alla
                                                    categoria "{{ __("ui.$category->name") }}"</h5>
                                            @break

                                            @case('Accessori')
                                                <h5 class="c-2 mb-3 fs-header typewriter-text2">
                                                    I piccoli dettagli a volte fanno la differenza, cerca il
                                                    tuo stile nella categoria "{{ __("ui.$category->name") }}"
                                                </h5>
                                            @break

                                            @case('Motori')
                                                <h5 class="c-2 mb-3 fs-header typewriter-text2">Stai vendendo il tuo
                                                    catorcio o ne stai cercando un altro?
                                                    Scoprilo nella categoria "{{ __("ui.$category->name") }}"
                                                </h5>
                                            @break
                                        @endswitch

                                        {{-- search --}}
                                        <form action="{{ route('article.search') }}" method="GET" role="search"
                                            class="d-flex w-100 mt-3">
                                            <div class="input-group">
                                                <input type="search" name="query" class="form-control"
                                                    placeholder="{{ __('ui.cerca') }}" aria-label="search"
                                                    value="{{ $query }}">
                                                <button class="input-group-text btn " type="submit" id="basic-addon2">
                                                    <i class="fa-solid fa-magnifying-glass"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </swiper-slide>
                    @endforeach
                </swiper-container>

                {{-- anteprima categorie --}}
                {{-- <swiper-container class="mySwiper2-index" free-mode="true" watch-slides-progress="true"
                    breakpoints='{
                        "0": { "slidesPerView": 2, "spaceBetween": 2 },
                        "768": { "slidesPerView": 4, "spaceBetween": 5 },
                        "1024": { "slidesPerView": 5, "spaceBetween": 10 }
                    }'>
                    @foreach ($categories as $category)
                        <swiper-slide class="my-1 point">
                            <div class="row justify-content-center p-0 position-relative">
                                <div class="col-12 container-little-img-card p-0">
                                    <img src="{{ Storage::url($category->img) }}" alt="" class="radius">
                                    <div class="little-black-opacity p-0 radius">
                                        <h6
                                            class="dark c-2 position-absolute top-50 start-50 translate-middle text-center">
                                            {{ __("ui.$category->name") }}</h5>
                                    </div>
                                </div>
                            </div>
                        </swiper-slide>
                    @endforeach
                </swiper-container> --}}
            </div>




            {{-- caret --}}
            <a href="#lastArticles"
                class="d-inline-flex position-absolute text-center text-decoration-none d-flex justify-content-center align-items-center mt-5"
                id="caret">
                <i class="fa-solid fa-angle-down" id="caret-icon"></i>
            </a>


        </div>
    </header>




    <section class="container">

        {{-- ULTIMI ARRIVI --}}

        <div class="row justify-content-center align-items-center vh-95 pt-2" id="lastArticles">

            {{-- TITOLO E GRAZIA --}}
            <div class="col-12 d-flex flex-column align-items-center ">
                <h3 class="d-inline display-4 text-center mb-0 pt-5 pb-1">{{ __('ui.ultimiArrivi') }}</h3>
                {{-- <div class="d-flex justify-content-center">
                    <img src="{{ asset('storage/background/onda1.png') }}" alt="" class="preview-onda">
                    <img src="{{ asset('storage/background/onda2.png') }}" alt="" class="preview-onda">
                </div> --}}
            </div>

            <div class="col-12 ">
                {{-- CAROSELLO EFFETTIVO --}}
                @if ($articles)
                    <swiper-container class="mySwiper swiper-container-home preview-art-container row  mx-auto"
                        space-between="0" pagination="false" loop="true" autoplay-delay="5000"
                        autoplay-pause-on-mouse-enter="true"
                        breakpoints='{
                            "0": { "slidesPerView": 1 },
                            "768": { "slidesPerView": 2 },
                            "1024": { "slidesPerView": 3 }
                        }'>
                        @foreach ($articles as $article)
                            <swiper-slide class=" mb-5 swiper-slide-home me-0 col-lg-12 col-md-4 col-3">
                                <x-card :article="$article" />
                            </swiper-slide>
                        @endforeach
                    </swiper-container>
                @else
                    <div class="col-12">
                        <p class="text-center my-3 fs-5">Non sono ancora stati creati articoli</p>
                    </div>
                @endif
            </div>
        </div>

        {{-- crea articolo --}}
        <div class="col-12 d-flex flex-column align-items-center justify-content-start mb-4 mt-3">
            {{-- <a href="{{ route('createarticle') }}"
        class="btn bg-4 btn-cus text-dark px-3 py-3 fs-4 rounded-4 w-md-25 " id="addArticle">
        {{ __('ui.aggiungiProdotto') }}
    </a> --}}
            <a href="{{ route('createarticle') }}" id="addArticle"
                class="btn-cus btn-flip btn-text fs-4 w-md-25 opacity-0" data-back="{{ __('ui.aggiungiProdotto2') }}"
                data-front="{{ __('ui.aggiungiUn') }} prodotto"></a>
        </div>

    </section>

    <x-footer></x-footer>

</x-layout>
