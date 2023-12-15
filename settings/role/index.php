<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Role Management</h4>
    </div>
    <div class="col-md-7 align-self-center text-end">
        <div class="d-flex justify-content-end align-items-center">
            <?php
            $breadcrumbs = ['' => 'Role'];
            include('common/breadcrumb/breadcrumb.php');
            ?>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-megna d-flex justify-content-between align-items-center">
                <h4 class="m-0 text-white">Role's List</h4>
                <a href="?page=role_create" class="btn btn-secondary pt-2">Create New Role</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="project_members_list" class="display nowrap table table-hover table-striped border w-100">
                        <thead>
                            <tr>
                                <th>Role Name</th>
                                <th>Permissions</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Admin</td>
                                <td>User-create, User-list, User-edit, User-delete, Project-create, Project-list,<br> Project-edit, Project-delete, Team-create, Team-list, Team-edit, Team-delete</td>
                                <td>
                                    <a href="#" class="btn btn-success mx-1"><i class="icon-note"></i></a>
                                    <a href="#" class="btn btn-danger mx-1"><i class="icon-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Team Lead</td>
                                <td>User-create, User-list, User-delete, Project-create, Project-list,<br> Project-edit, Project-delete, Team-create, Team-list, Team-edit, Team-delete</td>
                                <td>
                                    <a href="#" class="btn btn-success mx-1"><i class="icon-note"></i></a>
                                    <a href="#" class="btn btn-danger mx-1"><i class="icon-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Hierarchy Head</td>
                                <td>User-list, Project-list, Team-create, Team-list, Team-edit</td>
                                <td>
                                    <a href="#" class="btn btn-success mx-1"><i class="icon-note"></i></a>
                                    <a href="#" class="btn btn-danger mx-1"><i class="icon-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Developer</td>
                                <td>User-list, Project-list, Team-list</td>
                                <td>
                                    <a href="#" class="btn btn-success mx-1"><i class="icon-note"></i></a>
                                    <a href="#" class="btn btn-danger mx-1"><i class="icon-trash"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>