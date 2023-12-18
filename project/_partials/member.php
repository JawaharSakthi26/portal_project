<h6>Members</h6>
<section>
    <div class="row">
        <div class="member_fields col-md-12"></div>
    </div>
    <div class="row">
        <div class="col-md-2">
            <button type="button" class="btn btn-success add_user">Add New User</button>
        </div>
    </div>
    <hr>
</section>

<script>
    $("body").on("click", ".add_user", function() {
        appendUser();
    });

    let user_index = 0;

    function appendUser() {
        const user_field = `<div class="row member_fields_row">
                <div class="col-md-5">
                    <div class="form-group required">
                        <label for="user" class="form-label">User</label>
                        <select name="user[${user_index}][name]" class="form-control user" data-placeholder=" -- Choose User -- ">
                            <option></option>
                            <?php foreach ($users as $key =>  $value) { ?>
                                <option value="<?php echo $key ?>"><?php echo $value ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group required">
                        <label for="role" class="form-label">Role</label>
                        <select name="user[${user_index}][role]" class="form-control role" data-placeholder=" -- Choose Role -- ">
                            <option></option>
                            <?php foreach ($project_roles as $key =>  $value) { ?>
                                <option value="<?php echo $key ?>"><?php echo $value ?></option>
                            <?php } ?>
                        </select> 
                    </div>              
                </div>
                <div class="col-md-2 d-flex align-self-end">
                    <div class="form-group">
                        <button type="button" class="btn btn-danger remove_user"><i class="ti-trash"></i></button>
                    </div>
                </div>
            </div>`;

        $(".member_fields").append(user_field);
        select2('.role, .user');
        user_index++;
    }

    $("body").on("click", ".remove_user", function() {
        $(this).closest(".member_fields_row").remove();
    });
</script>