<?php

namespace Controllers;

class Master_Controller {
    protected $layout;
    
    public function __construct() {
        $this->layout = DX_ROOT_DIR . '/views/layouts/default.php';
//        echo "Master Controller<br />";
    }

}