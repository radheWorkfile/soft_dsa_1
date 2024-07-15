<section>
    <div class="row">
        <div class="col-lg-12">
            <div class="mb-3">
                <label for="example-number-input" class="form-label">Bank Name</label>
                <input type="hidden" name="id" id="id" class="form-control" value="<?php echo $upd_customer['id'] ?>">
                <select name="assigned_bank" id="assigned_bank" class="form-control" onchange="return get_agent_data(this.value)">
                    <option value=""> ---- Select One ---- </option>
                    <?php foreach ($assign_bank as $assn_bnk) { ?>
                        <option value="<?php echo $assn_bnk['id'] ?>" <?php echo ($assn_bnk['id'] == $upd_customer['assigned_bank']) ? "Selected" : "" ;  ?>><?php echo $assn_bnk['bank_name'] . " (" . $assn_bnk['ifsc_code'] . ")" ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
    </div>
</section>