                   <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label">Designation Name</label>
                                <input class="form-control" type="text" name="designation_name" id="designation_name" value="<?php echo $deg_data['designation'];?>" placeholder="Enter Designation Name">
                                <input class="form-control" type="hidden" name="id" id="id" value="<?php echo $deg_data['id'];?>">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <textarea name="description" id="description" rows="2" class="form-control"><?php echo $deg_data['description'];?></textarea>
                            </div>
                        </div>
                    </div>