<h6>General Info</h6>
<section>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label">Project Name </label>
                <input type="text" class="form-control" placeholder="Test Project" name="name">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label">Technologies </label>
                <select name="" class="form-control" id="technologies" multiple="multiple" data-placeholder=" -- Choose Technologies -- " name="technologies">
                    <?php foreach ($technologies as $key => $value) { ?>
                        <option value="<?php echo $key ?>"><?php echo $value ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label class="form-label">Description </label>
                <textarea id="description" name="description" class="form-control" placeholder="Project Description" rows="7"></textarea>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label">Development</label>
                <select name="" class="form-control form-select" id="development" name="development">
                    <option>-- Choose Development --</option>
                    <?php foreach ($development as $key => $value) { ?>
                        <option value="<?php echo $key ?>"><?php echo $value ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label">Git Ownership</label>
                <select name="" class="form-control form-select" id="ownership" name="ownership">
                    <option>-- Choose Git Ownership --</option>
                    <?php foreach ($ownership as $key => $value) { ?>
                        <option value="<?php echo $key ?>"><?php echo $value ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="form-label">Project Details Documentation</label>
                <textarea name="project_details_documentation" class="form-control" id="documentation"></textarea>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label class="form-label">Git URL</label>
                <textarea name="git_url" class="form-control" id="git_url"></textarea>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label">Start Date </label>
                <div class="input-group">
                    <input type="text" class="form-control" id="start_date" placeholder="dd/mm/yyyy">
                    <span class="input-group-text"><i class="icon-calender"></i></span>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label">End Date </label>
                <div class="input-group">
                    <input type="text" class="form-control" id="end_date" placeholder="dd/mm/yyyy">
                    <span class="input-group-text"><i class="icon-calender"></i></span>
                </div>
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

<script>
    select2('#development, #ownership, #technologies');
    switchery('#status');
    texteditor('#documentation, #git_url');
    datepicker('#start_date, #end_date');
</script>