<?php

namespace Questblue;

class Welcome{
    public $data = null;
    public $template = 'template';
    public $useTemplate = true;
    public $authRequired = false;
    public $cliOnly = false;

    public $cssFiles = null;
    public $jsFiles = null;

    public $post;

    public $view = null;

    public function __construct(){
    }

    public function initData(){
        $this->data['cssFiles'] = $this->cssFiles;
        $this->data['jsFiles'] = $this->jsFiles;
   }
}