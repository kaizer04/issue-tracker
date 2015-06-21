<?php

namespace Controllers;

class Issues_Controller {
    public function __construct() {
        echo "Issue Controller<br />";
    }

    public function index() {
        echo "Issues` index()<br/>";



        include_once DX_ROOT_DIR . '/views/issues/index.php';
    }
}