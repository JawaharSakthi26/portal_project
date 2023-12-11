<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Project Management</h4>
    </div>
    <div class="col-md-7 align-self-center text-end">
        <div class="d-flex justify-content-end align-items-center">
            <?php
            $breadcrumbs = ['?page=project_list' => 'Project', '' => 'Create Project'];
            include('common/breadcrumb/breadcrumb.php');
            ?>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-megna">
                <h4 class="m-b-0 text-white">Project Create</h4>
            </div>
            <div class="card-body wizard-content">
                <form action="" method="" id="form-wizard" class="wizard-circle" autocomplete="off">
                    <?php include('_partials/form.php') ?>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        formWizard('#form-wizard');
        select2('#development');
        select2('#ownership');
        select2('#version');
        select2('#role');
        select2('#user');
        switchery('#status');
        texteditor('#documentation, #live_credentials, #live_database, #live_cpanel, #live_whm, #live_others, #live_others, #demo_credentials,  #demo_database, #demo_cpanel, #demo_whm, #demo_others');
        datepicker('#start_date, #end_date');
    });
</script>