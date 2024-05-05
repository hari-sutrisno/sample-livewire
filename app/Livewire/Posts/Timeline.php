<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Attributes\Lazy;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Lazy]
#[Title('Posts')]

class Timeline extends Component
{

    #[On('postCreated')]

    public function placeholder()
    {
        return view('livewire.posts.timeline-placeholder');
    }

    public function render()
    {
        //sleep(2);

        $posts = Post::query()->with('user')->latest()->get();
        return view('livewire.posts.timeline-post', [
            'posts' => $posts
        ]);
    }
}
