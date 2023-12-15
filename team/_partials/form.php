<div class="form-body">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter Name">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label">Heirarchy Head</label>
                <select class="form-control form-select" id="heirarchy_head" name="role">
                    <option selected> -- Choose Heirarchy Head -- </option>
                    <?php foreach ($users as $key => $value) { ?>
                        <option value="<?php echo $key ?>"><?php echo $value ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group mb-0">
                <label class="form-label">Members</label>
                <select class="form-control form-select" id="members" data-placeholder="-- Select Team Members --" multiple="multiple" name="role">
                    <?php foreach ($users as $key => $value) { ?>
                        <option value="<?php echo $key ?>"><?php echo $value ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="form-actions">
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="?page=team_list" class="btn btn-dark">Back</a>
</div>

<script>
    $(document).ready(function() {
        select2('#heirarchy_head, #members');
    });
</script>