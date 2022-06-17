<?php

namespace App\Http\Livewire;

use App\Mail\ContactFromWeb;
use Livewire\Component;
use App\Models\Message;
use Illuminate\Support\Facades\Mail;

class ContactForm extends Component
{



    public $name="";
    public $email="";
    public $message="";
    public $phone="";


    public function render()
    {
        return view('livewire.contact-form');
    }


    protected $messages=[
        'name.required'=>'El nombre debe tener al menos 3 caracteres'

    ];


    protected $rules=[
        'name'=>'required|min:3',
        'email'=>'required|email',
        'phone'=>'required|min:8',
        'message'=>'required|min:5'
    ];

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }


    public function save()
    {

        $this->validate();

        Message::create([
            'name'=>$this->name,
            'email'=>$this->email,
            'phone'=>$this->phone,
            'message'=>$this->message
        ]);

        Mail::to('daniel.andres.zarate@gmail.com')->send(new ContactFromWeb(
            $this->name,
            $this->email,
            $this->phone,
            $this->message
        ));

        $this->reset(['name','email','phone','message']);

        $this->emit('alert','Correo Enviado Satisfactoriamente');

    }
}
