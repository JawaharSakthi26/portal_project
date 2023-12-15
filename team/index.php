<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Team Management</h4>
    </div>
    <div class="col-md-7 align-self-center text-end">
        <div class="d-flex justify-content-end align-items-center">
            <?php
            $breadcrumbs = ['' => 'Teams'];
            include('common/breadcrumb/breadcrumb.php');
            ?>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-megna d-flex justify-content-between align-items-center">
                <h4 class="m-0 text-white">Team's List</h4>
                <a href="?page=team_create" class="btn btn-secondary pt-2">Create New Team</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="team_list" class="display nowrap table table-hover table-striped border w-100">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Heirarchy Head</th>
                                <th>Members</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Team A</td>
                                <td>Head 1</td>
                                <td>Member 1, Member 2, Member 3</td>
                                <td>
                                    <a href="#" class="btn btn-success mx-1"><i class="icon-note"></i></a>
                                    <a href="#" class="btn btn-danger mx-1"><i class="icon-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Team B</td>
                                <td>Head 2</td>
                                <td>Member 1, Member 2, Member 3</td>
                                <td>
                                    <a href="#" class="btn btn-success mx-1"><i class="icon-note"></i></a>
                                    <a href="#" class="btn btn-danger mx-1"><i class="icon-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Team C</td>
                                <td>Head 3</td>
                                <td>Member 1, Member 2, Member 3</td>
                                <td>
                                    <a href="#" class="btn btn-success mx-1"><i class="icon-note"></i></a>
                                    <a href="#" class="btn btn-danger mx-1"><i class="icon-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Team D</td>
                                <td>Head 4</td>
                                <td>Member 1, Member 2, Member 3</td>
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
        datatable('#team_list');
    })
</script>