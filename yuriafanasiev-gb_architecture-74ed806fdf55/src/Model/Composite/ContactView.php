<?php

namespace Model\Composite;

class ContactView  {

    public $phone;
    public $email;
    
    public function draw(){
        return '<div class="contacts">'.'<p>'.$this->phone.'</p><p>'.$this->email.'</p></div>';
    }
    
}
