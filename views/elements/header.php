<!DOCTYPE html>
<html>
<head>

</head>
<body>
    <style type="text/css">
        body {
            background-color: lightgoldenrodyellow;
        }
    </style>
    <div id="container">
        <div id="top-menu">
            Top Menu
        </div>
<!--        --><?php
//            if(!empty($this->logged_user)) {
//                echo "<div id='userbar'>Hello, {$this->logged_user['username']}!</div>";
//            }
//        ?>
        <?php
            $logged_user = \Lib\Auth::get_instance()->get_logged_user();
            var_dump($logged_user);
        ?>
        <div id="main">

