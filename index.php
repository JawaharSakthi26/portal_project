<?php
$content = "";
switch ($_GET['page']) {
    case 'user_list':
        $content = "user/index.php";
        break;
    case 'user_create':
        $content = 'user/create.php';
        break;
    case 'user_edit':
        $content = 'user/edit.php';
        break;
    case 'project_list':
        $content = 'project/index.php';
        break;
    case 'project_create':
        $content = 'project/create.php';
        break;
}
include('common/helper/helper.php');
include('common/layout/layout1.php');
