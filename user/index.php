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
            <div class="card-header bg-megna d-flex justify-content-between align-items-center">
                <h4 class="text-white">Advance Search</h4>
            </div>
            <div class="card-body">
                <form action="">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label">Role</label>
                                <select class="form-control form-select" id="role" name="role">
                                    <option selected> -- Choose role -- </option>
                                    <?php foreach ($roles as $key => $value) { ?>
                                        <option value="<?php echo $key ?>"><?php echo $value ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Status</label>
                                <select class="form-control form-select" id="status" name="status">
                                    <option selected> -- Choose status -- </option>
                                    <?php foreach ($statuses as $key => $value) { ?>
                                        <option value="<?php echo $key ?>"><?php echo $value ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <hr>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-megna d-flex justify-content-between align-items-center">
                <h4 class="text-white">User's List</h4>
                <a href="?page=user_create" class="btn btn-secondary">Create New User</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="user_list" class="display nowrap table table-hover table-striped border w-100">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Code</th>
                                <th>Role</th>
                                <th>Created At</th>
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
                                <td>11/12/2023</td>
                                <td><span class="label label-success">Available</span></td>
                                <td>
                                    <a href="#" class="btn btn-dark mx-1"><i class="icon-eye"></i></a>
                                    <a href="?page=user_edit" class="btn btn-info mx-1"><i class="icon-note"></i></a>
                                    <a href="#" class="btn btn-danger mx-1"><i class="icon-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Test 2</td>
                                <td>101</td>
                                <td>Design</td>
                                <td>11/12/2023</td>
                                <td><span class="label label-danger">Removed</span> </td>
                                <td>
                                    <a href="#" class="btn btn-dark mx-1"><i class="icon-eye"></i></a>
                                    <a href="?page=user_edit" class="btn btn-info mx-1"><i class="icon-note"></i></a>
                                    <a href="#" class="btn btn-danger mx-1"><i class="icon-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Test 3</td>
                                <td>102</td>
                                <td>Frontend</td>
                                <td>11/12/2023</td>
                                <td><span class="label label-warning">Other Team</span> </td>
                                <td>
                                    <a href="#" class="btn btn-dark mx-1"><i class="icon-eye"></i></a>
                                    <a href="?page=user_edit" class="btn btn-info mx-1"><i class="icon-note"></i></a>
                                    <a href="#" class="btn btn-danger mx-1"><i class="icon-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Test 4</td>
                                <td>103</td>
                                <td>Network</td>
                                <td>11/12/2023</td>
                                <td><span class="label label-success">Available</span> </td>
                                <td>
                                    <a href="#" class="btn btn-dark mx-1"><i class="icon-eye"></i></a>
                                    <a href="?page=user_edit" class="btn btn-info mx-1"><i class="icon-note"></i></a>
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

<script>
    $(document).ready(function() {
        datatable('#user_list');
        select2('#role, #status');
    })
</script>