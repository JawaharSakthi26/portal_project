<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Sonicwall Management</h4>
    </div>
    <div class="col-md-7 align-self-center text-end">
        <div class="d-flex justify-content-end align-items-center">
            <?php
            $breadcrumbs = ['' => 'Sonicwall'];
            include('common/breadcrumb/breadcrumb.php');
            ?>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-megna d-flex justify-content-between align-items-center">
                <h4 class="m-0 text-white">Sonicwall List</h4>
                <a href="?page=sonicwall_create" class="btn btn-secondary pt-2">Create New Sonicwall</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="sonicwall_list" class="display nowrap table table-hover table-striped border w-100">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Domain</th>
                                <th>Server IP</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Sumanas_1</td>
                                <td>Pass 1</td>
                                <td>Test Domain 1</td>
                                <td>123</td>
                                <td>
                                    <a href="#" class="btn btn-success mx-1"><i class="icon-note"></i></a>
                                    <a href="#" class="btn btn-danger mx-1"><i class="icon-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Sumanas_2</td>
                                <td>Pass 2</td>
                                <td>Test Domain 2</td>
                                <td>123</td>
                                <td>
                                    <a href="#" class="btn btn-success mx-1"><i class="icon-note"></i></a>
                                    <a href="#" class="btn btn-danger mx-1"><i class="icon-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Sumanas_3</td>
                                <td>Pass 3</td>
                                <td>Test Domain 3</td>
                                <td>123</td>
                                <td>
                                    <a href="#" class="btn btn-success mx-1"><i class="icon-note"></i></a>
                                    <a href="#" class="btn btn-danger mx-1"><i class="icon-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Sumanas_4</td>
                                <td>Pass 4</td>
                                <td>Test Domain 4</td>
                                <td>123</td>
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
        datatable('#sonicwall_list');
    })
</script>