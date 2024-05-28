<?php

use Questblue\Welcome;

class ErrorPages extends Welcome{
    public function index(){
        $this->view = '404';
    }

    public function notFound(){
        $this->view = '404';
    }
}