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
                <h4 class="m-0 text-white">Active Projects</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="project_members_list" class="display nowrap table table-hover table-striped border w-100">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Projects</th>
                                <th>Platform</th>
                                <th>Development</th>
                                <th>Tester</th>
                                <th>Developers</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td colspan="5" class="fw-bold fs-5">Regular</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>CheckIssuing</td>
                                <td><span class="badge bg-dark">CI</span> <span class="badge bg-dark">Laravel</span> <span class="badge bg-dark">VUE</span></td>
                                <td><span class="badge bg-warning">Existing</span></td>
                                <td>Ajay</td>
                                <td><span class="dedicated_dev">Kannan</span>, <span class="worked_dev">Athavan</span> (<span class="helpful_dev">Nadesh, Stanley</span>)</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>DentalSoft</td>
                                <td><span class="badge bg-dark">PHP</span></td>
                                <td><span class="badge bg-warning">Existing</span></td>
                                <td>Ajay, Ahmad</td>
                                <td><span class="project_head">Selva</span>, <span class="worked_dev">Kannan</span> (<span class="helpful_dev">Nantha, Nadesh</span>)</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>TheNewMomSchool</td>
                                <td><span class="badge bg-dark">Laravel</span> <span class="badge bg-dark">Vue</span></td>
                                <td><span class="badge bg-info">Scratch</span></td>
                                <td>Ahmad</td>
                                <td><span class="project_head">Vasanth</span>, <span class="worked_dev">Vinoth, Athavan, Manoj</span> (<span class="helpful_dev">Nantha</span>)</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>10X Mile Value</td>
                                <td><span class="badge bg-dark">Laravel</span></td>
                                <td><span class="badge bg-warning">Existing</span></td>
                                <td>Ajay, Ahmad</td>
                                <td><span class="project_head">Nadesh</span>, <span class="worked_dev">Panneer, Hari, Kannan</span></td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td></td>
                                <td colspan="5" class="fw-bold fs-5">Weekly</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>NYU</td>
                                <td><span class="badge bg-dark">Laravel</span> <span class="badge bg-dark">Vue</span></td>
                                <td><span class="badge bg-info">Scratch</span></td>
                                <td>Ajay, Ahmad</td>
                                <td><span class="project_head">Vinoth</span>,<span class="worked_dev"> Ranjith, Praba</span> (<span class="helpful_dev">Stanley, Vasanth</span>)</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>MzeroA</td>
                                <td><span class="badge bg-dark">Angular</span> <span class="badge bg-dark">Laravel</span></td>
                                <td><span class="badge bg-warning">Existing</span></td>
                                <td>Ajay</td>
                                <td><span class="project_head">Ranjith</span>,<span class="worked_dev"> Vinoth, Manoj, Athavan</span> (<span class="helpful_dev">Stanley, Vasanth</span>)</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Primo</td>
                                <td><span class="badge bg-dark">Laravel</span></td>
                                <td><span class="badge bg-info">Scratch</span></td>
                                <td>Ajay</td>
                                <td><span class="project_head">Nadesh</span>, <span class="worked_dev">Panneer, Hari, Kannan</span> (<span class="helpful_dev">Stanley</span>)</td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td></td>
                                <td colspan="5" class="fw-bold fs-5">Hold / Some times</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Beachify</td>
                                <td><span class="badge bg-dark">React</span> <span class="badge bg-dark">Laravel</span></td>
                                <td><span class="badge bg-info">Scratch</span></td>
                                <td>Ahmad</td>
                                <td><span class="project_head">Nantha</span>, <span class="worked_dev">Athavan, Vinoth, Selva</span></td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Driving</td>
                                <td><span class="badge bg-dark">Yii2</span></td>
                                <td><span class="badge bg-info">Scratch</span></td>
                                <td>Ahmad</td>
                                <td><span class="project_head">Vasanth</span>, <span class="worked_dev">Kannan, Ramesh</span></td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>BPDS</td>
                                <td><span class="badge bg-dark">CI</span></td>
                                <td><span class="badge bg-warning">Existing</span></td>
                                <td>Ahmad</td>
                                <td><span class="project_head">Vasanth</span>, <span class="worked_dev">Kannan, Ramesh</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="header">
    <h4 class="">Team Projects</h4>
</div>
<div class="row">
    <div class="col-3">
        <div class="card">
            <div class="card-header bg-megna">
                <h4 class="m-0 text-white fw-bold">Team A [Stanley]</h4>
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
    <div class="col-3">
        <div class="card">
            <div class="card-header bg-megna">
                <h4 class="m-0 text-white fw-bold">Team B [Nadesh]</h4>
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
    <div class="col-3">
        <div class="card">
            <div class="card-header bg-megna">
                <h4 class="m-0 text-white fw-bold">Team C [Nantha]</h4>
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
    <div class="col-3">
        <div class="card">
            <div class="card-header bg-megna">
                <h4 class="m-0 text-white fw-bold">Team D [Athavan]</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <label class="form-label fw-normal">NewMomSchoolYU</label>
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