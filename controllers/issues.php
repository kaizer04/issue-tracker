<?php

namespace Controllers;

class Issues_Controller extends Master_Controller {
    public function __construct() {
        parent::__construct('/views/issues/');
    }

    public function index() {
//        echo "Issues` index()<br/>";

        $template_name = DX_ROOT_DIR . $this->views_dir . 'index.php';

        include_once $this->layout;
    }

//    public function dve() {
////        echo "Issues` index()<br/>";
//
//        $template_name = DX_ROOT_DIR . $this->views_dir . 'dve.php';
//
//        include_once $this->layout;
//    }
}