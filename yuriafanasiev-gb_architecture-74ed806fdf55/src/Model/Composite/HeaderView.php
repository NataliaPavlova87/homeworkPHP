<?php

namespace Model\Composite;

class HeaderView {
      
    public $values = [];
    
    public function add($component)  
    {    
        $this->values[] = $component; 
    }

    public function drawHeader()  
    {  
        $fields = []; 
        
        foreach ($this->values as $component) {  
            $fields[] = $component->draw(); 
        } 
         
        return $fields;  
    }  
    
}