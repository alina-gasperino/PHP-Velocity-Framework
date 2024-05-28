<?php

use Questblue\Welcome;

class Home extends Welcome{
    public function Index(){
        $this->data['test'] = 'Welcome to the homepage';
        
        $this->view = 'index';
    }
}
?>