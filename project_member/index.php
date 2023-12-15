<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Project Member Management</h4>
    </div>
    <div class="col-md-7 align-self-center text-end">
        <div class="d-flex justify-content-end align-items-center">
            <?php
            $breadcrumbs = ['' => 'Project Member'];
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
                                <th>Projects</th>
                                <th>Platform</th>
                                <th>Development</th>
                                <th>Tester</th>
                                <th>Developers</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Project 1</td>
                                <td>CI & Laravel Vue</td>
                                <td>Scratch</td>
                                <td>Tester 1</td>
                                <td>Dev-1, Dev-2, Dev-3 (Dev-4, Dev-5)</td>
                            </tr>
                            <tr>
                                <td>Project 2</td>
                                <td>PHP</td>
                                <td>Existing</td>
                                <td>Tester 1, Tester 2</td>
                                <td>Dev-1, Dev-2 (Dev-3, Dev-4)</td>
                            </tr>
                            <tr>
                                <td>Project 3</td>
                                <td>Laravel Vue</td>
                                <td>Existing</td>
                                <td>Tester 2</td>
                                <td>Dev-1, Dev-2, Dev-3, Dev-4 (Dev-5, Dev-6)</td>
                            </tr>
                            <tr>
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
                        <label class="form-label fw-normal">NYU</label>
                        <p>Ranjith</p>
                    </div>
                    <hr>
                    <div class="col-md-12">
                        <label class="form-label fw-normal">MzeroA</label>
                        <p>Ranjith</p>
                    </div>
                    <hr>
                    <div class="col-md-12">
                        <label class="form-label fw-normal">DoorSystem</label>
                        <p>Saravana</p>
                    </div>
                    <hr>
                    <div class="col-md-12">
                        <label class="form-label fw-normal">10XScrapping</label>
                        <p>Stanley, Ranjith</p>
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
                        <label class="form-label fw-normal">Facilitv</label>
                        <p>Hari</p>
                    </div>
                    <hr>
                    <div class="col-md-12">
                        <label class="form-label fw-normal">Primo</label>
                        <p>Panner, Hari</p>
                    </div>
                    <hr>
                    <div class="col-md-12">
                        <label class="form-label fw-normal">CheckIssuing</label>
                        <p>Kannan</p>
                    </div>
                    <hr>
                    <div class="col-md-12">
                        <label class="form-label fw-normal">RealEstateBot</label>
                        <p>Nadesh</p>
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
                        <label class="form-label fw-normal">YIP</label>
                        <p>Manoj</p>
                    </div>
                    <hr>
                    <div class="col-md-12">
                        <label class="form-label fw-normal">LQDigital</label>
                        <p>Vinoth, Manoj</p>
                    </div>
                    <hr>
                    <div class="col-md-12">
                        <label class="form-label fw-normal">NewMomSchool</label>
                        <p>Vinoth</p>
                    </div>
                    <hr>
                    <div class="col-md-12">
                        <label class="form-label fw-normal">OpenCharges</label>
                        <p>Nantha</p>
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
                        <label class="form-label fw-normal">NNewMomSchoolYU</label>
                        <p>Athavan</p>
                    </div>
                    <hr>
                    <div class="col-md-12">
                        <label class="form-label fw-normal">MzeroA</label>
                        <p>Athavan</p>
                    </div>
                    <hr>
                    <div class="col-md-12">
                        <label class="form-label fw-normal">12HourADI</label>
                        <p>Praba, Naren</p>
                    </div>
                    <hr>
                    <div class="col-md-12">
                        <label class="form-label fw-normal">Beachify</label>
                        <p>Naren</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>