<div class="row">
    <div class="col-lg-12">
        <div class="mb-3">
            <label class="form-label">Collateral Name</label>
            <input class="form-control" type="hidden" name="id" id="id" value="<?php echo $category['id'] ?>">
            <input class="form-control" type="text" name="pledged_assets_name" id="pledged_assets_name" value="<?php echo $category['pledged_assets_name'] ?>">
        </div>
    </div>
    <div class="col-lg-12">
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" id="description" rows="2" class="form-control"><?php echo $category['description'] ?></textarea>
        </div>
    </div>
</div>