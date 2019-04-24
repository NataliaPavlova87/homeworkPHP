<?php

namespace Model\Composite;

class LogoView {

    public $href;
    
    public function draw(){
        return '<a href="'.$this->href.'">Это logo</a>';
    }
    
}