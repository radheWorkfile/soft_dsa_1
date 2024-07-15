<section style="position:relative;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
             <p><img src="<?php echo base_url();?>media/images/id_card.png" alt=""style="height:22rem;margin-left:15rem;"></p>
             

             <div class="">
                <p style="position:absolute;top:1rem;left:17.5rem;"><img src="<?php echo base_url();?>media/images/mlm-logo-dark.png" alt="" style="height:1.1rem;"></p>
             <p style="position:absolute;top:3.4rem;left: 21.3rem;color:#051e2c;"><img src="<?php echo $cus_details['customer_passport_size_photo'];?>" alt=""style="height:5rem;"></p>
             <div style="position:absolute;top:8.6rem;left:17rem;width:27%;">
             <h4 style="text-align:center;color:#051e2c;"><b><?php echo $cus_details['name']?></b></h4>
            </div>
             <p style="position:absolute;top:13.5rem;left:18rem;font-size:0.5rem;color:#e9ebed;">Id No&nbsp;- <span><?php echo $cus_details['customer_id']?></span></p>
             <p style="position:absolute;top:14.5rem;left:18rem;font-size:0.5rem;color:#e9ebed;">Name&nbsp;- <span><?php echo $cus_details['name']?></span></p>
             <p style="position:absolute;top:15.5rem;left:18rem;font-size:0.5rem;color:#e9ebed;">Mobile&nbsp;- <span><?php echo $cus_details['mobile_no']?></span></p>
             <p style="position:absolute;top:16.5rem;left:18rem;font-size:0.5rem;color:#e9ebed;">Email Id&nbsp;- <span><?php echo $cus_details['email']?></span> </p>
             <p style="position:absolute;top:20.3rem;left:22rem;font-size:0.5rem;color:#e9ebed;">www.admin@prsoancenter.com</p>

             
             </div>
            </div>
        </div>
    </div>
</section>
