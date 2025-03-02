<x-layout>
    <header class="container mt-5 pt-4">
        <div class="row justify-content-center">
            <h1 class="col-12 display-3 text-center mt-4 mb-1">
                Articoli da revisionare
            </h1>
        </div>
    </header>

    <div class="container">
        @if ($article_to_check)
            <div class="row justify-content-center pt-5">
                <div class="col-md-8">
                    <div class="row justify-content-center">
                        @for ($i = 0; $i < 6; $i++)
                            <div class="col-4 mb-4 text-center">
                                <img src="https://picsum.photos/200" class="img-fluid rounded shadow" alt="">
                            </div>
                        @endfor
                    </div>
                </div>
                {{-- Dettagli dell'articolo da revisionare --}}
                <div class="col-md-4 d-flex justify-content-between flex-column">
                    <div class="row">
                        <h2 class="mb-3">
                            <span class="fs-6 me-1">{{ __('ui.titolo') }}: </span>{{ $article_to_check->title }}
                        </h2>
                        <h4 class="mb-3">
                            <span class="fs-6 fw-normal">Autore:</span> {{ $article_to_check->user->name }}
                        </h4>
                        <p class="fs-5">
                            <span class="fs-6">{{ __('ui.prezzo') }}: </span>€{{ $article_to_check->price }}
                        </p>
                        <p class="fst-italic text-muted fs-5">
                            <span class="fs-6 fst-normal">{{ __('ui.categoria') }}: </span>
                            #{{ $article_to_check->category->name }}
                        </p>
                        <p class="mb-0 fs-6">
                            {{ __('ui.descrizione') }}:
                        </p>
                        <p class="fs-5">
                            {{ $article_to_check->description }}
                        </p>
                    </div>
                    <div class="row">
                        @if (session()->has('success'))
                            <div class="mt-4 alert alert-success shadow rounded">
                                {{ session('success') }}
                            </div>
                        @elseif (session()->has('reject'))
                            <div class="mt-4 alert alert-danger shadow rounded">
                                {{ session('reject') }}
                            </div>
                        @endif
                    </div>
                    <div class="row pb-4 justify-content-around flex-row">
                        <form action="{{ route('reject', ['article' => $article_to_check]) }}" method='POST'
                            class="col-5">
                            @csrf
                            @method('PATCH')
                            <button class="btn btn-cus btn-danger py-2 px-5 fw-bold"
                                id="reject">{{ __('ui.rifiuta') }}</button>
                        </form>

                        <form action="{{ route('accept', ['article' => $article_to_check]) }}" method='POST'
                            class="col-5">
                            @csrf
                            @method('PATCH')
                            <button class="btn btn-cus btn-success py-2 px-5 fw-bold"
                                id="accept">{{ __('ui.accetta') }}</button>
                        </form>

                        {{-- <form action="{{ route('back', ['article' => $article_to_check]) }}" method='POST'
                            class="col-10">
                            @csrf
                            @method('PATCH')
                            <button class="btn btn-warning py-2 px-5 fw-bold">Annulla l'ultima operazione</button>
                        </form> --}}

                    </div>
                </div>
            </div>
        @else
            <div class="row justify-content-center align-items-center text-center">
                <div class="col-12">


                    <h1 class="fst-italic display-4">
                        Nessun articolo da revisionare
                    </h1>

                    <a href="{{ route('homepage') }}" class="mt-5 btn btn-info">
                        Torna alla home
                    </a>
                </div>
            </div>
        @endif
    </div>
    </div>
</x-layout>
