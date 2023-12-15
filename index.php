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
    case 'project_edit':
        $content = 'project/edit.php';
        break;
    case 'project_view':
        $content = 'project/view.php';
        break;
    case 'sonicwall_list':
        $content = 'sonicwall/index.php';
        break;
    case 'sonicwall_create':
        $content = 'sonicwall/create.php';
        break;
    case 'team_list':
        $content = 'team/index.php';
        break;
    case 'team_create':
        $content = 'team/create.php';
        break;
    case 'project_members_list':
        $content = 'project_member/index.php';
        break;
    case 'technology_list':
        $content = 'technology/index.php';
        break;
    case 'technology_create':
        $content = 'technology/create.php';
        break;
}
include('common/helper/helper.php');
include('common/layout/layout1.php');
