<?php 

Class NameController implements InterfaceController
{
    private $name;

    public function get()
    {
        if (isset($_GET['name'])){

        
        $this->name = $_GET['name'];
        return $this;
        }
    }

    public function post()
    {
        return $this->$name;
    }
    
}
