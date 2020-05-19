<?php if($this->session->flashdata('success')){ ?>
        <div class="alert alert-success" style="text-align:center" role="alert">
            Product Added
        </div>
<?php } ?>
<?php foreach($products as $key => $value){?>
<section class="single_product_details_area d-flex align-items-center">
        <!-- Single Product Thumb -->
        <div class="single_product_thumb clearfix">
            <div class="">
                <img src="<?php echo base_url('public/images/product/1.jpg')?>" alt="">
            </div>
        </div>
        <!-- Single Product Description -->
        <div class="single_product_desc clearfix">
            <a href="">
                <h2><?php  echo $value['name']?></h2>
            </a>
            <p class="product-price">$<?php echo $value['price']?></p>
            
           
            <!-- Form -->
        
        </div>  
        <?php } ?>
    </section>