<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Menu</title>
    <?php $this->load->view("_partials/head.php") ?>
  </head>
  <body>
  	<?php $this->load->view("_partials/navbar.php") ?>

    <section class="home-slider owl-carousel img" style="background-image: url(<?php echo base_url('assets/images/bg_1.jpg'); ?> );">

      <div class="slider-item" style="background-image: url(<?php echo base_url('assets/images/bg_3.jpg'); ?> );">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Menu Makanan</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url(); ?>">Home</a></span> <span>Menu</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>
    
    <section class="ftco-menu">
    	<div class="container-fluid">
    		<div class="row d-md-flex">

    			<div class="ftco-animate p-md-5">
    				<div class="row">

    					<div class="col-md-12 d-flex align-items-center">

    						<div class="tab-content ftco-animate" id="v-pills-tabContent">

    							<div class="tab-pane fade show active" id="v-pills-0" role="tabpanel"
    								aria-labelledby="v-pills-0-tab">

    								<div class="row">
										<div class="col-md-8">
											<div class="row">
											<?php foreach ($products as $row) : ?>
												<div class="col-md-4">
													<div class="thumbnail">
														<img width="200" src="<?php echo base_url().'gambar/'.$row->image;?>">
														<div class="caption">
															<h4><?php echo $row->name;?></h4>
															<h6><?php echo $row->description;?></h6>
															<div class="row">
																<div class="col-md-7">
																	<h4><?php echo 'Rp '.number_format($row->price);?></h4>
																</div>
																<div class="col-md-5">
																	<input type="number" name="quantity" id="<?php echo $row->product_id;?>" value="1" class="quantity">
																</div>
															</div>
															<button class="add_cart btn btn-outline-orange btn-block" data-produkid="<?php echo $row->product_id;?>" data-produknama="<?php echo $row->name;?>" data-produkharga="<?php echo $row->price;?>">Add To Cart</button>
														</div>
													</div>
												</div>
											<?php endforeach;?> 
											</div>
										</div>
										<?php $this->load->view("_partials/cart.php") ?>
									</div>

    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
	<?php $this->load->view("_partials/footer.php") ?>
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
  <?php $this->load->view("_partials/js.php") ?>
  </body>
</html>