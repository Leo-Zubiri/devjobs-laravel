<?php

namespace App\Http\Livewire;

use App\Models\Vacante;
use Livewire\Component;
use Livewire\WithFileUploads;

class PostularVacante extends Component
{
    use WithFileUploads;

    public $cv;
    public $vacante;

    protected $rules =[
        'cv' => 'required|mimes:pdf'
    ];

    public function mount(Vacante $vacante){
        $this->vacante = $vacante;
    }

    public function postularme(){
        $datos = $this->validate();

        // Almacenar el cv
        $cv =  $this->cv->store('public/cv');
        $nombre_cv = str_replace('public/cv/','',$cv);


        // Crear la postulacion
        $this->vacante->candidatos()->create([
            'user_id' => auth()->user()->id,
            'cv' => $nombre_cv
        ]);

        // Crear notificación y enviar email

        // Mostrar mensaje usuario ok
        session()->flash('mensaje', 'Se envió correctamente tu postulación');
        return redirect()->back();
    }

    public function render()
    {
        return view('livewire.postular-vacante');
    }
}
