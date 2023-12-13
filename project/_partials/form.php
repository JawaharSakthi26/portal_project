<h6>General Info</h6>
<section>
    <div class="row">
        <div class="col-md-6 form-group">
            <label for="firstName1" class="form-label">Project Name </label>
            <input type="text" class="form-control" placeholder="Test Project" name="name">
        </div>
        <div class="col-md-6 form-group">
            <label for="date1" class="form-label">Version </label>
            <select name="" class="form-control form-select" id="version" name="version">
                <option selected> -- Choose Version -- </option>
                <?php foreach ($version as $key => $value) { ?>
                    <option value="<?php echo $key ?>"><?php echo $value ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="col-md-12 form-group">
            <label for="lastName1" class="form-label">Description </label>
            <textarea id="description" name="description" class="form-control" placeholder="Project Description" rows="7"></textarea>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 form-group">
            <label for="emailAddress1" class="form-label">Development</label>
            <select name="" class="form-control form-select" id="development" name="development">
                <option selected> -- Choose Development -- </option>
                <?php foreach ($development as $key => $value) { ?>
                    <option value="<?php echo $key ?>"><?php echo $value ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="col-md-6 form-group">
            <label for="emailAddress1" class="form-label">Ownership</label>
            <select name="" class="form-control form-select" id="ownership" name="ownership">
                <option selected> -- Choose Ownership -- </option>
                <?php foreach ($ownership as $key => $value) { ?>
                    <option value="<?php echo $key ?>"><?php echo $value ?></option>
                <?php } ?>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 form-group">
            <label for="documentation" class="form-label">Project Details Documentation</label>
            <textarea name="project_details_documentation" class="form-control" id="documentation"></textarea>
        </div>
        <div class="col-md-6 form-group">
            <label for="jobTitle1" class="form-label">Start Date </label>
            <div class="input-group">
                <input type="text" class="form-control" id="start_date" placeholder="dd/mm/yyyy">
                <span class="input-group-text"><i class="icon-calender"></i></span>
            </div>
        </div>
        <div class="col-md-6 form-group">
            <label for="videoUrl1" class="form-label">End Date </label>
            <div class="input-group">
                <input type="text" class="form-control" id="end_date" placeholder="dd/mm/yyyy">
                <span class="input-group-text"><i class="icon-calender"></i></span>
            </div>
        </div>
        <div class="col-md-6">
            <label class="form-label">Status</label>
            <div class="switchery-demo">
                <input type="checkbox" checked id="status" data-color="#3d3b3b" />
            </div>
        </div>
    </div>
    <hr>
</section>
<h6>Live Details</h6>
<section>
    <div class="row">
        <div class="col-md-12 form-group">
            <label for="jobTitle1" class="form-label">Credentials </label>
            <textarea id="live_credentials" name="live_credentials" class="form-control"></textarea>
        </div>
        <div class="col-md-12 form-group">
            <label for="videoUrl1" class="form-label">Database </label>
            <textarea id="live_database" name="live_database" class="form-control"></textarea>
        </div>
        <div class="col-md-12 form-group">
            <label for="shortDescription1" class="form-label">cPanel </label>
            <textarea id="live_cpanel" name="live_cpanel" class="form-control"></textarea>
        </div>
        <div class="col-md-12 form-group">
            <label for="shortDescription1" class="form-label">WHM </label>
            <textarea id="live_whm" name="live_whm" class="form-control"></textarea>
        </div>
        <div class="col-md-12">
            <label for="shortDescription1" class="form-label">Others </label>
            <textarea id="live_others" name="live_others" class="form-control"></textarea>
        </div>
    </div>
    <hr>
</section>
<h6>Demo Details</h6>
<section>
    <div class="row">
        <div class="col-md-12 form-group">
            <label for="jobTitle1" class="form-label">Credentials </label>
            <textarea id="demo_credentials" name="demo_credentials" class="form-control"></textarea>
        </div>
        <div class="col-md-12 form-group">
            <label for="videoUrl1" class="form-label">Database </label>
            <textarea id="demo_database" name="demo_database" class="form-control"></textarea>
        </div>
        <div class="col-md-12 form-group">
            <label for="shortDescription1" class="form-label">cPanel </label>
            <textarea id="demo_cpanel" name="demo_cpanel" class="form-control"></textarea>
        </div>
        <div class="col-md-12 form-group">
            <label for="shortDescription1" class="form-label">WHM </label>
            <textarea id="demo_whm" name="demo_whm" class="form-control"></textarea>
        </div>
        <div class="col-md-12">
            <label for="shortDescription1" class="form-label">Others </label>
            <textarea id="demo_others" name="demo_others" class="form-control"></textarea>
        </div>
    </div>
    <hr>
</section>
<h6>Member</h6>
<section>
    <div class="row">
        <div class="member-fields col-md-12">
            <!-- Fields will be appended here -->
        </div>
    <!-- </div>
    <div class="row"> -->
        <div class="col-md-2">
            <button type="button" class="btn btn-success add-user">Add New User</button>
        </div>
    </div>
    <hr>
</section>