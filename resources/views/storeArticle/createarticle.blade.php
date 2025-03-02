<x-layout>

    <header class="container mt-5 pt-5 vh-100">
        <div class="row justify-content-center pt-3">
            <h1 class="col-12 display-4 text-center mb-5">{{ __('ui.aggiungiProdotto') }}</h1>
            <x-success />

            {{-- @if (session()->has('success'))
                <div class=" alert alert-success">

                    {{ session('success') }}
                </div>
            @endif --}}

        </div>
        <div class="row justify-content-center">
            <livewire:add-article />
        </div>
    </header>
    <x-footer></x-footer>
</x-layout>
