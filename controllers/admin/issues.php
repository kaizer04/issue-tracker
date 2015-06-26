<?php

namespace Admin\Controllers;

class Issues_Controller extends Admin_Controller {
    public function __construct() {
        parent::__construct(get_class(),
                            'issue',
                            '/views/admin/issues/');
    }

    public function index() {
//        echo "Issues` index()<br/>";
//        $issues = $this->model->get(1);
//        $issues = $this->model->get_by_title('test1');
        $issues = $this->model->find();
//        var_dump($issues); die();
        $template_name = DX_ROOT_DIR . $this->views_dir . 'index.php';

        include_once $this->layout;
    }

    public function edit($id) {
        if(!empty($_POST['title']) && !empty($_POST['description'] ) && !empty($_POST['id'] ) && !empty($_POST['state'] )) {
            $title = $_POST['title'];
            $description = $_POST['description'];
            $submissionDateTime = $_POST['dateTime'];
            $authorId = $_POST['user_id'];
            $stateId = $_POST['state'];
            $id = $_POST['id'];

            $issue = array(
                'id' => $id,
                'title' => $title,
                'description' => $description,
                'submission_date_and_time' => $submissionDateTime,
                'user_id' => $authorId,
                'state_id' => $stateId
            );

            $this->model->update($issue);
        }

        $issue = $this->model->get($id);
//        var_dump($issue); die();
        if(empty($issue)) {
            die('Nothing to edit here');
        }

        $issue = $issue[0];
//        var_dump($issue); die();

        $template_name = DX_ROOT_DIR . $this->views_dir . 'edit.php';

        include_once $this->layout;
    }

    public function add() {
        if(!empty($_POST['title']) && !empty($_POST['description'])) {
            $title = $_POST['title'];
            $description = $_POST['description'];
            $submissionDateTime = date('Y-m-d H:i:s');
            $authorId = $this->logged_user['id'];
            $stateId = 1;

            $issue = array(
                'title' => $title,
                'description' => $description,
                'submission_date_and_time' => $submissionDateTime,
                'user_id' => $authorId,
                'state_id' => $stateId
            );

            $this->model->add($issue);
        }

        $template_name = DX_ROOT_DIR . $this->views_dir . 'add.php';

        include_once $this->layout;
    }

    public function view($id) {
        $issue = $this->model->get($id);
//        var_dump($issue); die();
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