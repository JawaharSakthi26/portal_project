<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">User Management</h4>
    </div>
    <div class="col-md-7 align-self-center text-end">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb justify-content-end" id="dynamicBreadcrumbs">

            </ol>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-info">
                <h4 class="m-b-0 text-white">User <?php echo $test == '1' ? 'Edit' : 'Create'; ?></h4>
            </div>
            <div class="card-body">
                <form action="#">
                    <div class="form-body">
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter Name" value="<?php echo $test == '1' ? 'Test' : ''; ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Code</label>
                                    <input type="number" class="form-control" name="code" placeholder="Enter code" value="<?php echo $test == '1' ? '100' : ''; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Role</label>
                                    <select class="form-control form-select select2" name="role" style="width: 100%; height:36px;">
                                        <option selected> -- Choose role -- </option>
                                        <option value="1" <?php echo $test == '1' ? 'selected' : '' ?>>Dev</option>
                                        <option value="2">Frontend</option>
                                        <option value="3">Design</option>
                                        <option value="4">Network</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Status</label>
                                    <select class="form-control form-select select2" name="status" style="width: 100%; height:36px;">
                                        <option selected> -- Choose status -- </option>
                                        <option value="2">Removed</option>
                                        <option value="3">Other Team</option>
                                        <option value="3" <?php echo $test == '1' ? 'selected' : '' ?>>Available</option>
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
                </form>
            </div>
        </div>
    </div>
</div>