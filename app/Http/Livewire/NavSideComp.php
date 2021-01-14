<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NavSideComp extends Component
{

    public $nameSideBar;
    public $icon;
    public $anchor;
    public $path;


    public function mount($nameSideBar, $icon = "", $anchor = "#", $path = "")
    {
        $this->nameSideBar = $nameSideBar;
        $this->icon = $icon;
        $this->anchor = $anchor;
        $this->path = $path;
    }

    public function render()
    {
        return view('livewire.navigation.side-navigation.nav-side-comp.nav-side-comp');
    }
}
