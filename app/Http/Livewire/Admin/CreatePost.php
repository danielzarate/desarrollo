<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Post;
use Livewire\WithFileUploads;

class CreatePost extends Component
{

    use WithFileUploads;

    public $open=false;

    public $title;
    public $content;
    public $image;
    public $identificador;

    public function mount(){
        $this->identificador=rand();
    }


    protected $rules=[
        'title'=>'required|min:1',
        'content'=>'required|min:1',
        'image'=>'required|image|max:2048'
    ];

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.admin.create-post');
    }

    public function save()
    {
        $this->validate();

        $image=$this->image->store('public/posts');

        Post::create([
            'title'=>$this->title,
            'content'=>$this->content,
            'image'=>$image
        ]);
        $this->reset(['open','title','content','image']);
        $this->identificador=rand();

        $this->emitTo('admin.show-posts','render');
        $this->emit('alert','El post se creo satisfactoriamente');



    }
}
