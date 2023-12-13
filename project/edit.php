<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Project Management</h4>
    </div>
    <div class="col-md-7 align-self-center text-end">
        <div class="d-flex justify-content-end align-items-center">
            <?php
            $breadcrumbs = ['?page=project_list' => 'Project', '' => 'Edit Project'];
            include('common/breadcrumb/breadcrumb.php');
            ?>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-megna">
                <h4 class="m-b-0 text-white">Project Edit</h4>
            </div>
            <div class="card-body wizard-content">
                <form action="" method="" id="project-create" class="wizard-circle" autocomplete="off">
                    <?php include('_partials/form.php') ?>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        formWizard('#project-create');
        select2('#development, #ownership, #technologies');
        switchery('#status');
        texteditor('#documentation,#git_url, #live_credentials, #live_database, #live_cpanel, #live_whm, #live_others, #live_others, #demo_credentials,  #demo_database, #demo_cpanel, #demo_whm, #demo_others');
        datepicker('#start_date, #end_date');

        $("body").on("click", ".add-user", function() {
            console.log("clicked");
            var index = $(".member-fields").find(".member-fields_row").length + 1;
            $(".member-fields").append(`
            <div class="row member-fields_row">
                <div class="col-md-5 form-group">
                    <label for="user" class="form-label">User </label>
                    <select name="user[]" class="form-control user" data-placeholder=" -- Choose User -- ">
                        <option></option>
                        <?php foreach ($users as $key =>  $value) { ?>
                            <option value="<?php echo $key ?>"><?php echo $value ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-md-5 form-group">
                    <label for="role" class="form-label">Role </label>
                    <select name="role[]" class="form-control role" data-placeholder=" -- Choose Role -- ">
                        <option></option>
                        <?php foreach ($project_roles as $key =>  $value) { ?>
                            <option value="<?php echo $key ?>"><?php echo $value ?></option>
                        <?php } ?>
                    </select>               
                </div>
                <div class="col-md-2 form-group d-flex align-items-end">
                    <button type="button" class="btn btn-danger remove-user"><i class="ti-trash"></i></button>
                </div>
            </div>`);

            select2('.role, .user');
        });

        $("body").on("click", ".remove-user", function() {
            $(this).closest(".member-fields_row").remove();
            console.log("success");
        });
    });
</script>