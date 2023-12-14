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
                <h4 class="text-white">Advance Search</h4>
            </div>
            <div class="card-body">
                <form action="">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Development</label>
                                    <select class="form-control form-select" id="project" name="project">
                                        <option selected> -- Choose Development -- </option>
                                        <?php foreach ($development as $key => $value) { ?>
                                            <option value="<?php echo $key ?>"><?php echo $value ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Technologies</label>
                                    <select class="form-control form-select" id="technology" name="technology">
                                        <option selected> -- Choose Technology -- </option>
                                        <?php foreach ($technologies as $key => $value) { ?>
                                            <option value="<?php echo $key ?>"><?php echo $value ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2 mt-2">
                                <div class="form-group mb-0">
                                    <label class="form-label">Status</label>
                                    <div class="switchery-demo">
                                        <input type="checkbox" checked id="status" data-color="#3d3b3b" />
                                    </div>
                                </div>
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
                <h4 class="text-white">Project's List</h4>
                <a href="?page=project_create" class="btn btn-secondary">Create New Project</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="project_list" class="display nowrap table table-hover table-striped border w-100">
                        <thead>
                            <tr>
                                <th>Project Name</th>
                                <th>Technologies</th>
                                <th>Development</th>
                                <th>Git Ownership</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Project 1</td>
                                <td>React, Laravel</td>
                                <td>Scratch</td>
                                <td>Client</td>
                                <td><span class="label label-success">Active</span></td>
                                <td>
                                    <a href="?page=project_view" class="btn btn-info mx-1"><i class="icon-eye"></i></a>
                                    <a href="?page=project_edit" class="btn btn-success mx-1"><i class="icon-note"></i></a>
                                    <a href="#" class="btn btn-danger mx-1"><i class="icon-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Project 2</td>
                                <td>Angular, Laravel</td>
                                <td>Existing</td>
                                <td>WWU</td>
                                <td><span class="label label-success">Active</span></td>
                                <td>
                                    <a href="?page=project_view" class="btn btn-info mx-1"><i class="icon-eye"></i></a>
                                    <a href="?page=project_edit" class="btn btn-success mx-1"><i class="icon-note"></i></a>
                                    <a href="#" class="btn btn-danger mx-1"><i class="icon-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Project 3</td>
                                <td>React, Node</td>
                                <td>Existing</td>
                                <td>WWU</td>
                                <td><span class="label label-danger">Inactive</span></td>
                                <td>
                                    <a href="?page=project_view" class="btn btn-info mx-1"><i class="icon-eye"></i></a>
                                    <a href="?page=project_edit" class="btn btn-success mx-1"><i class="icon-note"></i></a>
                                    <a href="#" class="btn btn-danger mx-1"><i class="icon-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Project 4</td>
                                <td>Angular, Laravel</td>
                                <td>Scratch</td>
                                <td>Client</td>
                                <td><span class="label label-success">Active</span></td>
                                <td>
                                    <a href="?page=project_view" class="btn btn-info mx-1"><i class="icon-eye"></i></a>
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
        select2('#project, #technology');
        switchery('#status');
    })
</script>