<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Project Members Management</h4>
    </div>
    <div class="col-md-7 align-self-center text-end">
        <div class="d-flex justify-content-end align-items-center">
            <?php
            $breadcrumbs = ['' => 'Project Members'];
            include('common/breadcrumb/breadcrumb.php');
            ?>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-megna d-flex justify-content-between align-items-center">
                <h4 class="m-0 text-white">Project Member's List</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="project_members_list" class="display nowrap table table-hover table-striped border w-100">
                        <thead>
                            <tr>
                                <th>S.NO</th>
                                <th>Projects</th>
                                <th>Platform</th>
                                <th>Development</th>
                                <th>Tester</th>
                                <th>Developers</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Project 1</td>
                                <td>CI & Laravel Vue</td>
                                <td>Scratch</td>
                                <td>Tester 1</td>
                                <td>Dev-1, Dev-2, Dev-3 (Dev-4, Dev-5)</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Project 2</td>
                                <td>PHP</td>
                                <td>Existing</td>
                                <td>Tester 1, Tester 2</td>
                                <td>Dev-1, Dev-2 (Dev-3, Dev-4)</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Project 3</td>
                                <td>Laravel Vue</td>
                                <td>Existing</td>
                                <td>Tester 2</td>
                                <td>Dev-1, Dev-2, Dev-3, Dev-4 (Dev-5, Dev-6)</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Project 4</td>
                                <td>Python Rasa</td>
                                <td>Scratch</td>
                                <td>Tester 1</td>
                                <td>Dev-1, Dev-2, Dev-3(Dev-4, Dev-5)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="header">
    <h4>Team Projects</h4>
</div>
<div class="row">
    <div class="col-6">
        <div class="card">
            <div class="card-header bg-megna">
                <h4 class="m-0 text-white">Team A[Stanley]</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <p>NYU - <b>Ranjith</b></p>
                    </div>
                    <hr>
                    <div class="col-md-12">
                        <p>MzeroA - <b>Ranjith</b></p>
                    </div>
                    <hr>
                    <div class="col-md-12">
                        <p>DoorSystem - <b>Saravana</b></p>
                    </div>
                    <hr>
                    <div class="col-md-12">
                        <p>10XScrapping - <b>Stanley, Ranjith</b></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="card">
            <div class="card-header bg-megna">
                <h4 class="m-0 text-white">Team B[Nadesh]</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <p>Facilitv - <b>Hari</b></p>
                    </div>
                    <hr>
                    <div class="col-md-12">
                        <p>Primo - <b>Panner, Hari</b></p>
                    </div>
                    <hr>
                    <div class="col-md-12">
                        <p>CheckIssuing - <b>Kannan</b></p>
                    </div>
                    <hr>
                    <div class="col-md-12">
                        <p>RealEstateBot - <b>Nadesh</b></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-6">
        <div class="card">
            <div class="card-header bg-megna">
                <h4 class="m-0 text-white">Team C[Nantha]</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <p>YIP - <b>Manoj</b></p>
                    </div>
                    <hr>
                    <div class="col-md-12">
                        <p>LQDigital - <b>Vinoth, Manoj</b></p>
                    </div>
                    <hr>
                    <div class="col-md-12">
                        <p>NewMomSchool - <b>Vinoth</b></p>
                    </div>
                    <hr>
                    <div class="col-md-12">
                        <p>OpenCharges - <b>Nantha</b></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="card">
            <div class="card-header bg-megna">
                <h4 class="m-0 text-white">Team D[Athavan]</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <p>NewMomSchool - <b>Athavan</b></p>
                    </div>
                    <hr>
                    <div class="col-md-12">
                        <p>MzeroA - <b>Athavan</b></p>
                    </div>
                    <hr>
                    <div class="col-md-12">
                        <p>12HourADI - <b>Praba, Naren</b></p>
                    </div>
                    <hr>
                    <div class="col-md-12">
                        <p>Beachify - <b>Naren</b></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        datatable('#project_members_list');
    })
</script>