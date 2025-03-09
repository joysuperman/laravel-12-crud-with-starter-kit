<?php

namespace App\Livewire;

use App\Models\Post;
use Flux\Flux;
use Livewire\Component;
use Livewire\Attributes\On;

class PostEdit extends Component
{
    public $title, $content, $post_id;
    public function render()
    {
        return view('livewire.post-edit');
    }

    #[On("editPost")]
    public function editPost($id){
        $post = Post::find($id);
        $this->post_id = $id;
        $this->title = $post->title;
        $this->content = $post->content;
        Flux::modal('post-edit', $id)->show();
    }


    public function update(){
        $this->validate([
            "title" => "required",
            "content" => "required"
        ]);

        $post = Post::find($this-> post_id);
        $post->title = $this->title;
        $post->content = $this->content;
        $post->save();

        Flux::modal('post-edit')->close();
        $this -> dispatch("reloadPosts");
    }
}
