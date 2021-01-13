<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NavSideMobileComp extends Component
{
    public $nameSideBar;
    public $icon;
    public $anchor;
    public $active;


    public function mount($nameSideBar, $icon = "", $anchor = "#", $active = false)
    {
        $this->nameSideBar = $nameSideBar;
        $this->icon = $icon;
        $this->anchor = $anchor;
        $this->active = $active;
    }

    public function render()
    {
        return view('livewire.navigation.side-navigation-mobile.nav-side-mobile-comp.nav-side-mobile-comp');
    }
}
