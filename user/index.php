<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">User Management</h4>
    </div>
    <div class="col-md-7 align-self-center text-end">
        <div class="d-flex justify-content-end align-items-center">
            <?php
            $breadcrumbs = ['' => 'User'];
            include('common/breadcrumb/breadcrumb.php');
            ?>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-info d-flex justify-content-between align-items-center">
                <h4 class="m-b-0 text-white">User's List</h4>
                <a href="?page=user_create" class="btn btn-secondary">Create New User</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="user_list" class="display nowrap table table-hover table-striped border" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Code</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Test</td>
                                <td>100</td>
                                <td>Dev</td>
                                <td><span class="label label-success">Available</span></td>
                                <td>
                                    <a href="#" class="btn btn-info mx-1"><i class="icon-eye"></i></a>
                                    <a href="?page=user_edit" class="btn btn-warning mx-1"><i class="icon-note"></i></a>
                                    <a href="#" class="btn btn-danger mx-1"><i class="icon-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Test 2</td>
                                <td>101</td>
                                <td>Design</td>
                                <td><span class="label label-danger">Removed</span> </td>
                                <td>
                                    <a href="#" class="btn btn-info mx-1"><i class="icon-eye"></i></a>
                                    <a href="?page=user_edit" class="btn btn-warning mx-1"><i class="icon-note"></i></a>
                                    <a href="#" class="btn btn-danger mx-1"><i class="icon-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Test 3</td>
                                <td>102</td>
                                <td>Frontend</td>
                                <td><span class="label label-warning">Other Team</span> </td>
                                <td>
                                    <a href="#" class="btn btn-info mx-1"><i class="icon-eye"></i></a>
                                    <a href="?page=user_edit" class="btn btn-warning mx-1"><i class="icon-note"></i></a>
                                    <a href="#" class="btn btn-danger mx-1"><i class="icon-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Test 4</td>
                                <td>103</td>
                                <td>Network</td>
                                <td><span class="label label-success">Available</span> </td>
                                <td>
                                    <a href="#" class="btn btn-info mx-1"><i class="icon-eye"></i></a>
                                    <a href="?page=user_edit" class="btn btn-warning mx-1"><i class="icon-note"></i></a>
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