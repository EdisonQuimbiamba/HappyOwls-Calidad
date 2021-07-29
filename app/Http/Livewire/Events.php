<?php

namespace App\Http\Livewire;

use DateTime;
use DateTimeZone;
use Livewire\Component;

class Events extends Component
{
    public function render()
    {
        /* Obtiene la fecha y hora situado en Bogota */
        $tz_object = new DateTimeZone('America/Bogota');
        
        $datetime = new DateTime();
        $datetime->setTimezone($tz_object);
        $date = $datetime->format("Y-m-d\TH:i");
        
        return view('livewire.events')->with('date', $date);
    }
}
