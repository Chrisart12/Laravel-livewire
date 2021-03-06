<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Light extends Component
{
    public $brightness = 40;
   
    public function render()
    {
        return view('livewire.light');
    }

    public function off()
    {
        $this->brightness = 0;
    }

    public function on()
    {
        $this->brightness = 100;
    }

    public function increment()
    {
        if ($this->brightness < 100) {
            $this->brightness += 10;
        }
        
    }

    public function decrement()
    {
        if ($this->brightness > 0) {
            $this->brightness -= 10;
        }
        
    }

    
}
