<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{

    Public $title;
    public $subTitle;
    public $description;


    public function __construct($title,$subTitle,$description)
    {
        //
        $this->title=$title;
        $this->subTitle=$subTitle;
        $this->description=$description;
    }


    public function render()
    {
        return view('components.card');
    }

    //component method

    public function addNumber($a){
          return $a+20;
    }
}
