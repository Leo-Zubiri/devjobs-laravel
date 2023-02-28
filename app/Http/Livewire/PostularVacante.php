<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PostularVacante extends Component
{

    public $cv;

    protected $rules =[
        'cv' => 'required|mimes:pdf'
    ];

    public function postularme(){
        $this->validate();

        // Guardar CV

        // Crear la postulacion

        // Crear notificación y enviar email

        // Mostrar mensaje usuario ok
    }

    public function render()
    {
        return view('livewire.postular-vacante');
    }
}
