<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ChildDropSideBarComp extends Component
{

    public $subName;
    public $anchor;

    public function mount($subName, $anchor = "#")
    {
        $this->subName = $subName;
        $this->anchor = $anchor;
    }

    public function render()
    {
        return view('livewire.navigation.side-navigation.child-drop-side-bar-comp.child-drop-side-bar-comp');
    }
}
