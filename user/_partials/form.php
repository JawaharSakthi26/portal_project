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
                <label class="form-label">Code</label>
                <input type="number" class="form-control" name="code" placeholder="Enter code">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label">Role</label>
                <select class="form-control form-select" id="role" name="role">
                    <option selected> -- Choose role -- </option>
                    <?php foreach ($roles as $key => $value) { ?>
                        <option value="<?php echo $key ?>"><?php echo $value ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label">Status</label>
                <div class="switchery-demo m-b-30">
                    <input type="checkbox" checked id="status" data-color="#3d3b3b" />
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="form-actions">
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="?page=user_list" class="btn btn-dark">Back</a>
</div>

<script>
    $(document).ready(function() {
        select2('#role');
        toggle('#status');
    });
</script>