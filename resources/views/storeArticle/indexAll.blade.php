<x-layout>
    <header class="container-fluid  mt-5 pt-5 min-vh-100">
        <div class="row height-custom justify-content-center align-items-center text-center">
            <div class="col-12">
                <h1 class="display-2 pt-4">{{ __('ui.mostraProdotti') }}</h1>
            </div>
        </div>
        <div class="row wh-100 justify-content-center align-items-center py-5">

            @forelse ($articles as $article)
                <div class="col-12 col-md-3  m-3">
                    <x-card :article="$article" />
                </div>

            @empty

                <div class="col-12">
                    <p class="text-center my-3 fs-5"> Non sono ancora stati creati articoli </p>
                </div>
            @endforelse

        </div>
    </header>

    <div class="d-flex justify-content-center">
        <div>
            {{ $articles->links() }}
        </div>
    </div>
    <x-footer></x-footer>
</x-layout>
