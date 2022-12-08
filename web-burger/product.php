  <!-- bradcam_area_start -->
   <div class="bradcam_area breadcam_bg overlay"> 
        <h3>Menu</h3>
     </div> 
    <!-- bradcam_area_end -->
  <!-- best_burgers_area_start  -->
  <div class="best_burgers_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center mb-80">
                        <span>Burger Menu</span>
                        <h3>Best Ever Burgers</h3>
                    </div>
                </div>
            </div>
            <div class="row">
            <?php
            foreach($allpro as $pro)
            {
                ?>
           
                <div class="col-xl-6 col-md-6 col-lg-6">
                    <div class="single_delicious d-flex align-items-center">
                        <div class="thumb">
                            <img src="../admin/upload/<?php echo $pro->pro_img;?>" alt="">
                        </div>
                        <div class="info">
                            <h3><?php echo $pro->pro_name;?></h3>
                            <p> <?php echo $pro->pro_desc; ?></p>
                            <span><?php echo $pro->pro_price;?></span>
                            <form method="post">
                            <p><input type="text" name="qty" id=""></p>
                            <input type="hidden" name="pid" value="<?php echo $pro->pro_id;?>"> 
                            <div>
                                <button class="btn bg-primary py-2 px-3" type="submit" name="addtocart">Add to cart</button>
                            </div>   
                        </div>
                    </div>
                    
                    </form>
                </div>
           
                
                <?php
                 }
                 ?>
            </div>
                </div>
            </div>
        </div>
    </div>
    
    <a href="#" class="boxed-btn3" align="center">Order Now</a>
    
    <!-- best_burgers_area_end  -->
