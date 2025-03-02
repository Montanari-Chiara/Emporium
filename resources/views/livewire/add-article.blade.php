<div class="col-10 col-md-8 col-lg-6 rounded shadow px-5 py-4 bg-1">
    <form wire:submit="createArticles">
        @csrf

        {{-- titolo --}}
        <div class="mb-3">
            <label class="form-label" for="title">{{ __('ui.titolo') }}</label>
            <input type="text" class="form-control" wire:model.blur="title" id="title" value="{{ old('title') }}">
            @error('title')
                <div class="px-2 py-1 fst-italic bg-danger-subtle rounded">
                    {{ $message }}
                </div>
            @enderror
        </div>

        {{-- descrizione --}}
        <div class="form-floating mb-3">
            <textarea class="form-control" placeholder="Scrivi una descrizione" id="description" wire:model.blur="description"></textarea>
            <label for="description">{{ __('ui.descrizione') }}</label>
            @error('description')
                <div class="px-2 py-1 fst-italic bg-danger-subtle rounded">
                    {{ $message }}
                </div>
            @enderror
        </div>

        {{-- prezzo --}}
        <div class="mb-3">
            <label class="form-label" for="price">{{ __('ui.prezzo') }}</label>
            <input type="number" step="0.01" class="form-control" wire:model.blur="price" id="price">
            @error('price')
                <div class="px-2 py-1 fst-italic bg-danger-subtle rounded">
                    {{ $message }}
                </div>
            @enderror
        </div>

        {{-- categorie --}}
        <div class="mb-3">
            <label class="form-label" for="category">{{ __('ui.categoria') }}</label>
            <select wire:model.blur="category" class="form-select" id="category">
                <option value="">{{ __('ui.selezionaCategoria') }}</option>

                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ __("ui.$category->name") }}</option>
                @endforeach
            </select>
            @error('category')
                <div class="px-2 py-1 fst-italic bg-danger-subtle rounded">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn bg-4 btn-cus w-100 p-3 mt-4 mb-1 fs-5" id="addProduct">{{ __('ui.aggiungiProdotto') }}</button>

    </form>
</div>
