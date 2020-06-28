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
				<div class="col-lg-8 ftco-animate p-md-5">
					<div class="row">
						<div class="col nav-link-wrap mb-5">
    						<div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    							<a class="nav-link active" id="v-pills-0-tab" data-toggle="pill" href="#v-pills-0"
    								role="tab" aria-controls="v-pills-0" aria-selected="true">All</a>

    							<a class="nav-link" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab"
    								aria-controls="v-pills-1" aria-selected="true">Pasta</a>

    							<a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab"
    								aria-controls="v-pills-2" aria-selected="false">Pizza</a>

    							<a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab"
    								aria-controls="v-pills-3" aria-selected="false">Drink</a>

    							<a class="nav-link" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab"
    								aria-controls="v-pills-4" aria-selected="false">Other</a>
							</div>
						</div>

    					<div class="col-md-12 d-flex align-items-center">

    						<div class="tab-content ftco-animate" id="v-pills-tabContent">
								<?php $this->load->view('menu-data'); ?>
    						</div>
    					</div>
    				</div>
				</div>
				<div class="col-lg-4 ftco-animate p-md-5">
					<?php $this->load->view("_partials/cart.php") ?>
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