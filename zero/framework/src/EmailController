<?php

Class EmailController implements InterfaceController
{
    public function get()
    {
      if (isset($_GET['email'])){     
        $this->email = $_GET['email'];
        return $this;
        }
    }

    public function post()
    {
        return $this->email;
    }

}
