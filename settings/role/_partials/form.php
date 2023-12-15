<div class="form-body">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="form-label">Role</label>
                <input type="text" class="form-control" name="name" placeholder="Enter Role name">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label fs-4">User</label><br>
                        <?php foreach ($permissions as $key => $value) { ?>
                            <input class="form-check-input mx-1 fs-5" type="checkbox" value="">
                            <label class="form-check-label mx-1 fs-5">
                                <?php echo $value ?>
                            </label>
                            <br>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label fs-4">Project</label><br>
                        <?php foreach ($permissions as $key => $value) { ?>
                            <input class="form-check-input mx-1 fs-5" type="checkbox" value="">
                            <label class="form-check-label mx-1 fs-5">
                                <?php echo $value ?>
                            </label>
                            <br>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label fs-4">Sonicwall</label><br>
                        <?php foreach ($permissions as $key => $value) { ?>
                            <input class="form-check-input mx-1 fs-5" type="checkbox" value="">
                            <label class="form-check-label mx-1 fs-5">
                                <?php echo $value ?>
                            </label>
                            <br>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label fs-4">Team</label><br>
                        <?php foreach ($permissions as $key => $value) { ?>
                            <input class="form-check-input mx-1 fs-5" type="checkbox" value="">
                            <label class="form-check-label mx-1 fs-5">
                                <?php echo $value ?>
                            </label>
                            <br>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label fs-4">Project Members</label><br>
                        <?php foreach ($permissions as $key => $value) { ?>
                            <input class="form-check-input mx-1 fs-5" type="checkbox" value="">
                            <label class="form-check-label mx-1 fs-5">
                                <?php echo $value ?>
                            </label>
                            <br>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label fs-4">Bart Sheet Access</label><br>
                        <?php foreach ($permissions as $key => $value) { ?>
                            <input class="form-check-input mx-1 fs-5" type="checkbox" value="">
                            <label class="form-check-label mx-1 fs-5">
                                <?php echo $value ?>
                            </label>
                            <br>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label fs-4">Reports</label><br>
                        <?php foreach ($permissions as $key => $value) { ?>
                            <input class="form-check-input mx-1 fs-5" type="checkbox" value="">
                            <label class="form-check-label mx-1 fs-5">
                                <?php echo $value ?>
                            </label>
                            <br>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group mb-0">
                        <label class="form-label fs-4">Technology</label><br>
                        <?php foreach ($permissions as $key => $value) { ?>
                            <input class="form-check-input mx-1 fs-5" type="checkbox" value="">
                            <label class="form-check-label mx-1 fs-5">
                                <?php echo $value ?>
                            </label>
                            <br>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group mb-0">
                            <label class="form-label fs-4">Role</label><br>
                            <?php foreach ($permissions as $key => $value) { ?>
                                <input class="form-check-input mx-1 fs-5" type="checkbox" value="">
                                <label class="form-check-label mx-1 fs-5">
                                    <?php echo $value ?>
                                </label>
                                <br>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="form-actions">
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="?page=role_list" class="btn btn-dark">Back</a>
</div>