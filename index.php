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
}
include('common/helper.php');
include('common/layout/layout1.php');