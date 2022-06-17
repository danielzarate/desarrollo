<?php

namespace App\Http\Livewire\Admin;
use Livewire\Component;
use App\Models\Post;
use Livewire\WithPagination;

class ShowPosts extends Component
{

    use WithPagination;

    public $search;

    protected $listeners=['render'];

    public function render()
    {
        $posts=Post::where('title','LIKE','%'.$this->search.'%')
                        ->orwhere('content','LIKE','%'.$this->search.'%')
                        ->latest('id')
                        ->paginate(10);

        return view('livewire.admin.show-posts',compact('posts'));
    }
}
