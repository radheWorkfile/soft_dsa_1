                
                <h2 class="mb-sm-0 font-size-18 fw-bold" style="padding:25px 15px 15px 244px;margin-left:11rem;"><span style="border:1px solid #d2d2d2;padding:0.5rem 2rem;border-radius:0.4rem;">All User's</span></h2>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Si.No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Mobile No</th>
                            <th scope="col">Date</th>
                            <th>Select One</th> 
                        </tr>
                    </thead>
                    <tbody>
                    <!-- mem_id   id    menu   type  $this->session->userdata('user_id');  assign_data-->
                        <!-- ---------------------------------------------  -->
                        <div class="table1 table2 work">
                            <?php 
									$sno=0;
									foreach ($all_user as $u => $user) :
									$whereCon=array('mem_id'=>$user['id'],'menu'=>$type);
									$isExist=$this->Common_model->get_data('assign_menu',$whereCon,'*');
									if(!$isExist)
									{
										$sno++; ?>
                                <tr>
                                    <td><?php echo $sno; ?></td>
                                    <td><?php echo $user['name']; ?></td>
                                    <td><?php echo $user['mobile']; ?></td>
                                    <td><?php /*print_r($isExist);*/echo $user['created_at']; ?></td>
                                    <td><input type="checkbox" id="mem_id" name="mem_id[]" value="<?php echo $user['id'] ?>"></td>
                                </tr>
                                  <?php
									}
									 endforeach; ?>
                          
                        </div>
                        
                        <div id="table2"></div>
                        <!-- ---------------------------------------------  -->

                    </tbody>
                </table>
                <div class="col-lg-2" style="margin-top:1.8rem;float:right;">
                   <button type="submit" id="check" class="btn btn-primary waves-effect waves-light check">Give Permission</button>
                </div>



                <script>
                    $(document).ready(function() {
                        $("#mem_id").click(function() {
                            $("##mem_id").prop("checked", true);
                            $(".check").css('background-color','#259325').html("<b>Assign Work...</b>");
                        });
                       
                    });
// $assign_data['id'] == ($all_user['id']==$type))   work

                    $(document).ready(function() {
                         if($assign_data['id'] == ($all_user['id']==$type))
                         {
                            $(".work").hide();
                         }else{
                            $(".work").show();
                         }
                       
                    });
                      
                </script>