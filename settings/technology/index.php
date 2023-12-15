<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Technology Management</h4>
    </div>
    <div class="col-md-7 align-self-center text-end">
        <div class="d-flex justify-content-end align-items-center">
            <?php
            $breadcrumbs = ['' => 'Technology'];
            include('common/breadcrumb/breadcrumb.php');
            ?>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-megna d-flex justify-content-between align-items-center">
                <h4 class="m-0 text-white">Technologies List</h4>
                <a href="?page=technology_create" class="btn btn-secondary pt-2">Create New Technology</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="technology_list" class="display nowrap table table-hover table-striped border w-100">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>PHP</td>
                                <td>
                                    <a href="#" class="btn btn-success mx-1"><i class="icon-note"></i></a>
                                    <a href="#" class="btn btn-danger mx-1"><i class="icon-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Laravel</td>
                                <td>
                                    <a href="#" class="btn btn-success mx-1"><i class="icon-note"></i></a>
                                    <a href="#" class="btn btn-danger mx-1"><i class="icon-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>React</td>
                                <td>
                                    <a href="#" class="btn btn-success mx-1"><i class="icon-note"></i></a>
                                    <a href="#" class="btn btn-danger mx-1"><i class="icon-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Angular</td>
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
<script>
    $(document).ready(function() {
        datatable('#technology_list');
    });
</script>