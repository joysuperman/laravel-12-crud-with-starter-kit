<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Flux;

class PostCreate extends Component
{
    public $title, $content;
    public function render()
    {
        return view('livewire.post-create');
    }

    public function submit(){
        $this->validate([
            "title" => "required",
            "content" => "required"
        ]);

        Post::create([
            "title" => $this->title,
            "content" => $this->content
        ]);

        $this->resetForm();
        Flux::modal('create-post')->close();
        $this -> dispatch("reloadPosts");
    }

    public function resetForm(...$properties)
    {
        $this -> title ="";
        $this -> content ="";
    }
}
