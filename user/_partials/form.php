<?php
$roles = [
    '1' => 'Dev',
    '2' => 'Frontend',
    '3' => 'Design',
    '4' => 'Network',
];

$statuses = [
    '1' => 'Active',
    '2' => 'Inactive',
    '3' => 'Archieved',
];
?>
<div class="form-body">
    <div class="row p-t-20">
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
                <select class="form-control form-select select2" name="role" style="width: 100%; height:36px;">
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
                <select class="form-control form-select select2" name="status" style="width: 100%; height:36px;">
                    <option selected> -- Choose status -- </option>
                    <?php foreach ($statuses as $key => $value) { ?>
                        <option value="<?php echo $key ?>"><?php echo $value ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="form-actions">
    <button type="submit" class="btn btn-success text-white"> Submit</button>
    <button type="button" class="btn btn-secondary">Back</button>
</div>