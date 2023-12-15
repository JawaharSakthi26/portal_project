<div class="form-body">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group m-0">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter Name">
            </div>
        </div>
    </div>
</div>
<hr>
<div class="form-actions">
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="?page=technology_list" class="btn btn-dark">Back</a>
</div>

<script>
    $(document).ready(function() {
        select2('#role');
        switchery('#status');
    });
</script>