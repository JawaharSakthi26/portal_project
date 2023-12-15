<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Technology Management</h4>
    </div>
    <div class="col-md-7 align-self-center text-end">
        <div class="d-flex justify-content-end align-items-center">
            <?php
            $breadcrumbs = ['?page=technology_list' => 'Technology', '' => 'Create Technology'];
            include('common/breadcrumb/breadcrumb.php');
            ?>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-megna">
                <h4 class="m-0 text-white">Technology Create</h4>
            </div>
            <div class="card-body">
                <form action="#" method="post">
                    <?php include('_partials/form.php') ?>
                </form>
            </div>
        </div>
    </div>
</div>
