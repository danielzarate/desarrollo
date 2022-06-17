<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Post;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class EditPost extends Component
{
    use WithFileUploads;

    public $open=false;
    public $image;
    public $identificador;
    public $post;

    protected $rules =[
        'post.title'=>'required',
        'post.content'=>'required'
    ];

    public function mount(Post $post){
        $this->post=$post;
        $this->identificador=rand();

    }

    public function render()
    {
        return view('livewire.admin.edit-post');
    }

    public function update()
    {
        $this->validate();

        if ($this->image){
            Storage::delete([$this->post->image]);
            $this->post->image=$this->image->store('public/posts');

        }

        $this->post->save();
        $this->emitTo('admin.show-posts','render');
        $this->identificador=rand();
         $this->reset(['open','image']);
        $this->emit('alert','El post se actualizo satisfactoriamente');


    }
}
