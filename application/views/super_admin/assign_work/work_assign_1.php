<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between card flex-sm-row border-0">
            <h4 class="mb-sm-0 font-size-16 fw-bold"><?php echo $title ?></h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);"></a></li>
                    <li class="breadcrumb-item active"><?php echo $breadcrums ?></li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- ============================================================================== -->
<p id="successData" style="color:red;"></p>
<form id="assign_work" class="assign_work_com" method="post" accept-charset="utf-8" enctype="multipart/form-data">
<div class="card">
    <div class="card-body">
            <div class="row">
                <h2 class="mb-sm-0 font-size-18 fw-bold" style="padding: 15px;">Assign Work to the user.</h2>
                <div class="col-lg-5">
                    <div class="mb-3">
                        <label class="form-label">&nbsp;Select Menu <span class="text-danger">*</span></label>
                        <select name="menu" id="menu" class="form-select">
                         <option value="">---- Select One ----</option>
                            <?php foreach($all_menu as $a => $menu):?>
                            <option value="<?php echo $menu['id'];?>">-&nbsp;<?php echo $menu['menu'];?></option>
                            <?php endforeach;?>
                            </select>
                            
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="mb-3">
                        <label for="example-date-input" class="form-label">&nbsp;Select One<span class="text-danger">*</span></label>
                        <select name="department_type" id="department_type" class="form-select">
                         <option value="">---- Select One ----</option>
                         <option value="2">Agent</option>
                         <option value="3">Employee</option>
                        </select>
                    </div>
                </div>

            <div class="col-lg-2" style="margin-top:1.8rem;">
                   <button type="submit" id="check" class="btn btn-primary waves-effect waves-light check">Search User</button>
            </div>

            </div>

            <!-- end row -->
            

                <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="mb-6">
                        <!-- ===============================================  -->
                        <table class="table table-striped">
                          <tbody>
                        <!-- ---------------------------------------------  -->
                        <div class="table1 table2">
                        </div>
                       <!-- ---------------------------------------------  -->
                          </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-2"></div>
             </div>
        </form>

    </div>
</div>


<!-- ============================================================================== -->



<!-- end page title -->

<script src="<?php echo base_url() ?>media/js/super_admin/setting.js"></script>


<script>  
    
$('#assign_work').submit(function(e) {
    e.preventDefault();  
    $.ajax({
        type: "POST",
        url: base_url + 'super_admin/Assign_work/add_data',
        data: $(this).serialize(),
        success: function(data) {
            $(".table1").hide(); 
            $(".table2").html(data).show();
           if(data.icon == success)
           {
               $("#successData").html(data.text).show();
           }
        }
    });
});

    $('.assign_work_com').submit(function(e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: base_url + 'super_admin/Assign_work/save_data',
        data: $(this).serialize(),
        dataType: 'json',
        success: function(data) {
            if (data.icon == "error") {
                var valid = '';
                $.each(data.text, function(i, item) {
                    valid += item;
                });
                Swal.fire({
                    position: "top-end",
                    icon: data.icon,
                    html: valid,
                    showConfirmButton: !1,
                    timer: 1500
                });
            } else {
                Swal.fire({
                    position: "top-end",
                    icon: data.icon,
                    title: data.text,
                    showConfirmButton: !1,
                    timer: 1500
                });
            }
        }

    });

});


</script>