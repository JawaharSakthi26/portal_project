<h6>Live Details</h6>
<section>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group required">
                <label class="form-label">Credentials</label>
                <textarea id="live_credentials" name="live_credentials" class="form-control"></textarea>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group required">
                <label class="form-label">Database</label>
                <textarea id="live_database" name="live_database" class="form-control"></textarea>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group required">
                <label class="form-label">cPanel</label>
                <textarea id="live_cpanel" name="live_cpanel" class="form-control"></textarea>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group required">
                <label class="form-label">WHM</label>
                <textarea id="live_whm" name="live_whm" class="form-control"></textarea>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group m-0 required">
                <label class="form-label">Others</label>
                <textarea id="live_others" name="live_others" class="form-control"></textarea>
            </div>
        </div>
    </div>
    <hr>
</section>

<script>
    texteditor('#live_credentials, #live_database, #live_cpanel, #live_whm, #live_others, #live_others');
</script>