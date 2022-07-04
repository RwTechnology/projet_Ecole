<?php
include_once('../config/app.php');
include_once('../controllers/LoginController.php');

 $auth = new LoginController;


    $checkLogout=$auth->logout();
    if ($checkLogout) {
        redirect("","index.php");
    }
