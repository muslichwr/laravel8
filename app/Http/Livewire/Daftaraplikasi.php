<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Daftaraplikasi extends Component
{
    public function render()
    {
        return view('livewire.daftaraplikasi' , [
            'daftaraplikasi'
    ]);
    }
}
