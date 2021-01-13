<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CardComp extends Component
{

    public $title;
    public $value;
    public $bgIcon;
    public $icon;

    public function mount($title, $value = 0, $bgIcon = "bg-white", $icon)
    {
        $this->title = $title;
        $this->value = $value;
        $this->bgIcon = $bgIcon;
        $this->icon = $icon;
    }

    public function render()
    {
        return view('livewire.content.card-comp.card-comp');
    }
}
