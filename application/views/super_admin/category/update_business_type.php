<div class="row">
    <div class="col-lg-12">
        <div class="mb-3">
            <label class="form-label">Business Type Name</label>
            <input class="form-control" type="hidden" name="id" id="id" value="<?php echo $business['id']; ?>">
            <input class="form-control" type="text" name="business_type_name" id="business_type_name" value="<?php echo $business['business_type_name']; ?>">
        </div>
    </div>
    <div class="col-lg-12">
        <div class="mb-3">
            <label class="form-label">Description:</label>
            <textarea class="form-control" name="description" id="description"><?php echo $business['description'] ?></textarea>
        </div>
    </div>
</div>