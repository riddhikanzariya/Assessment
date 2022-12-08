<div class="bradcam_area breadcam_bg_1 overlay">
    <h3>about</h3>
</div>
<!-- bradcam_area_end -->
<!-- gallery_start -->
<div class="gallery_area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                            <div class="section_title mb-70 text-center">
                                    <span>Gallery Image</span>
                                    <h3>Our Gallery</h3>
                                </div>
                    </div>
                </div>
            </div>
            <?php
             foreach($allab as $ab)
             {
            ?>
            <div class="single_gallery big_img">
                    <a class="popup-image" href="img/gallery/1.png">
                        <i class="ti-plus"></i>
                    </a>
                    <div class="thumb">
                    <img src="../admin/upload/<?php echo $ab->ab_image;?>" alt="">
                    </div>
            </div>
           <?php
             }
           ?>
           
        </div>
        