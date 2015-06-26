<?php

namespace Controllers;

class Comments_Controller extends Master_Controller {
    public function __construct() {
        parent::__construct(get_class(),
                            'comment',
                            '/views/comments/');
    }

    public function index() {
//        echo "Issues` index()<br/>";
//        $issues = $this->model->get(1);
//        $issues = $this->model->get_by_title('test1');
        $comments = $this->model->find();
//        var_dump($issues); die();
        $template_name = DX_ROOT_DIR . $this->views_dir . 'index.php';

        include_once $this->layout;
    }

    public function view($id) {
        $comment = $this->model->get($id);
        var_dump($comment); die();
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