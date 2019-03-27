<?php

Class EdadController implements InterfaceController
{
    public function get()
    {
        if(isset($_GET['edad'])){
            $this->edad = $_GET['edad'];
            return $this;
        }
    }
    
    public function post()
    {
        return $this->edad;  
    }

}
