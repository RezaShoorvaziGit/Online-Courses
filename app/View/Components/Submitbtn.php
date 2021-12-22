<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Submitbtn extends Component
{
    public $action;

    public $value;

    public $css;

    public $method ;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($action = "welcome", $value = "ارسال", $css = "",$method="GET")
    {
        $this->action = $action;

        $this->value = $value;

        $this->css = $css;

        $this->method = $method ;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.submitbtn');
    }
}
