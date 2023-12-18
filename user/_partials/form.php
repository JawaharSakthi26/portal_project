<div class="form-body">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group required">
                <label class="form-label">First Name</label>
                <input type="text" class="form-control" name="first_name" placeholder="Enter First Name">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group required">
                <label class="form-label">Last Name</label>
                <input type="text" class="form-control" name="last_name" placeholder="Enter Last Name">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group required">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Enter Email">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group required">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Enter Password">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group required mb-0">
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
            <div class="form-group mb-0">
                <label class="form-label">Status</label>
                <div class="switchery-demo">
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
        switchery('#status');
    });
</script>