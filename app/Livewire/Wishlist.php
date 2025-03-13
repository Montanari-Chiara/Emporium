<?php

namespace App\Livewire;
// namespace App\Http\Livewire;
use App\Models\Article;
use Illuminate\Database\Schema\Blueprint;
use Livewire\Component;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;


class Wishlist extends Component
{
    public $addedToWishlist = true;
    public $removedToWishlist = true;
    public $article;
    public $wishlist;

    public function mount(Article $article)
    {
        $this->article = $article;
    }

    public function addToWish()
    {
        $user = Auth::user();
        // Aggiungi l'articolo alla wishlist
        $article = Article::find($this->article->id);
        // dd($article);
        $user->wishlist()->syncWithoutDetaching([$article->id]);
        $this->addedToWishlist = false;


        // $this->dispatch('wishlistUpdated', ['articleId' => $this->article->id, 'action' => 'add']);
    }

    public function deleteWish()
    {
        $user = Auth::user();
        // Aggiungi l'articolo alla wishlist
        $article = Article::find($this->article->id);
        $user->wishlist()->detach($article->id);
        $this->removedToWishlist = true;

        // $this->emit('wishlistUpdated');
        // $this->dispatch('wishlistUpdated', ['articleId' => $this->article->id, 'action' => 'remove']);

    }

    public function render()
    {
        return view('livewire.wishlist');
    }
}
