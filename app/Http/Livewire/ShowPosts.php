<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use Livewire\WithPagination;


class ShowPosts extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $posts=Post::paginate(10);

        return view('livewire.show-posts',compact('posts'));
    }
}
