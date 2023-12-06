<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">User Create</h4>
    </div>
    <div class="col-md-7 align-self-center text-end">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb justify-content-end">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">User Create</li>
            </ol>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">User Create</h4>
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="tb-fname">Name</label>
                                <input type="text" class="form-control" placeholder="Enter Name" value="<?php echo $test == '1' ? 'Test' : ''; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="tb-email">Code</label>
                                <input type="number" class="form-control" placeholder="Enter code" value="<?php echo $test == '1' ? '100' : ''; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <div class="form-group">
                                    <label class="form-label">Role</label>
                                    <select class="form-select col-12" id="inlineFormCustomSelect">
                                        <option selected>Choose role</option>
                                        <option value="1" <?php echo $test == '1' ? 'selected' : '' ?>>Dev</option>
                                        <option value="2">Frontend</option>
                                        <option value="3">Design</option>
                                        <option value="4">Network</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <div class="form-group">
                                    <label class="form-label">Status</label>
                                    <select class="form-select col-12" id="inlineFormCustomSelect">
                                        <option selected>Choose status</option>
                                        <option value="1">Removed</option>
                                        <option value="2">Other Team</option>
                                        <option value="3" <?php echo $test == '1' ? 'selected' : '' ?>>Available</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-md-flex align-items-center mt-3">
                                <div class="ms-auto mt-3 mt-md-0">
                                    <button type="submit" class="btn btn-primary text-white">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>