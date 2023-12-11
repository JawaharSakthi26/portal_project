<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Project Management</h4>
    </div>
    <div class="col-md-7 align-self-center text-end">
        <div class="d-flex justify-content-end align-items-center">
            <?php
            $breadcrumbs = ['' => 'Project'];
            include('common/breadcrumb/breadcrumb.php');
            ?>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-megna d-flex justify-content-between align-items-center">
                <h4 class="text-white">Project's List</h4>
                <a href="?page=project_create" class="btn btn-secondary">Create New Project</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="project_list" class="display nowrap table table-hover table-striped border w-100">
                        <thead>
                            <tr>
                                <th>Project Name</th>
                                <th>Version</th>
                                <th>-</th>
                                <th>-</th>
                                <th>Development</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Project 1</td>
                                <td>8.2.1</td>
                                <td>-</td>
                                <td>-</td>
                                <td>Scratch</td>
                                <td><span class="label label-success">Active</span></td>
                                <td>
                                    <a href="#" class="btn btn-info mx-1"><i class="icon-eye"></i></a>
                                    <a href="?page=project_edit" class="btn btn-success mx-1"><i class="icon-note"></i></a>
                                    <a href="#" class="btn btn-danger mx-1"><i class="icon-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Project 2</td>
                                <td>8.2.0</td>
                                <td>-</td>
                                <td>-</td>
                                <td>Existing</td>
                                <td><span class="label label-success">Active</span></td>
                                <td>
                                    <a href="#" class="btn btn-info mx-1"><i class="icon-eye"></i></a>
                                    <a href="?page=project_edit" class="btn btn-success mx-1"><i class="icon-note"></i></a>
                                    <a href="#" class="btn btn-danger mx-1"><i class="icon-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Project 3</td>
                                <td>7.3.2</td>
                                <td>-</td>
                                <td>-</td>
                                <td>Existing</td>
                                <td><span class="label label-danger">Inactive</span></td>
                                <td>
                                    <a href="#" class="btn btn-info mx-1"><i class="icon-eye"></i></a>
                                    <a href="?page=project_edit" class="btn btn-success mx-1"><i class="icon-note"></i></a>
                                    <a href="#" class="btn btn-danger mx-1"><i class="icon-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Project 4</td>
                                <td>7.3.5</td>
                                <td>-</td>
                                <td>-</td>
                                <td>Scratch</td>
                                <td><span class="label label-success">Active</span></td>
                                <td>
                                    <a href="#" class="btn btn-info mx-1"><i class="icon-eye"></i></a>
                                    <a href="?page=project_edit" class="btn btn-success mx-1"><i class="icon-note"></i></a>
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
        datatable('#project_list');
    })
</script>