<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\On;

class Posts extends Component
{
    public $posts;
    public function mount(){
        $this->posts = Post::all();
    }
    public function render()
    {
        return view('livewire.posts');
    }

    #[On("reloadPosts")]
    public function reloadPosts(){
        $this->posts = Post::all();
    }

}
