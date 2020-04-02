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
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Menu</span></p>
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
    					<div class="col-md-12 nav-link-wrap mb-5">
    						<div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    							<a class="nav-link active" id="v-pills-0-tab" data-toggle="pill" href="#v-pills-0"
    								role="tab" aria-controls="v-pills-0" aria-selected="true">All</a>

    							<a class="nav-link" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab"
    								aria-controls="v-pills-1" aria-selected="true">Nasi</a>

    							<a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab"
    								aria-controls="v-pills-2" aria-selected="false">Sop</a>

    							<a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab"
    								aria-controls="v-pills-3" aria-selected="false">Sayuran</a>

    							<a class="nav-link" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab"
    								aria-controls="v-pills-4" aria-selected="false">Minuman</a>

    							<a class="nav-link" id="v-pills-5-tab" data-toggle="pill" href="#v-pills-5" role="tab"
    								aria-controls="v-pills-5" aria-selected="false">Lainnya</a>
    						</div>
    					</div>

    					<div class="col-md-12 d-flex align-items-center">

    						<div class="tab-content ftco-animate" id="v-pills-tabContent">

    							<div class="tab-pane fade show active" id="v-pills-0" role="tabpanel"
    								aria-labelledby="v-pills-0-tab">

    								<div class="row">
    									<?php foreach ($products as $product): ?>
    									<div class="col-sm text-center">
    										<div class="menu-wrap">
    											<img src="<?php echo base_url('gambar/'.$product->image) ?>"
    												class="menu-img img mb-4" />
    											<div class="text">
    												<h3><a href="#"><?php echo $product->name ?></a></h3>
    												<p><?php echo $product->description ?>.</p>
    												<p class="price"><span>Rp. <?php echo $product->price ?></span></p>
    												<p><a href="#" class="btn btn-white btn-outline-white">Add to
    														cart</a></p>
    											</div>
    										</div>
    									</div>
    									<?php endforeach; ?>
    								</div>

    							</div>

    							<div class="tab-pane fade" id="v-pills-1" role="tabpanel"
    								aria-labelledby="v-pills-1-tab">
    								<div class="row">
    									<?php foreach ($products as $product): ?>
    									<div class="col-sm text-center">
    										<div class="menu-wrap">
    											<img src="<?php echo base_url('gambar/'.$product->image) ?>"
    												class="menu-img img mb-4" />
    											<div class="text">
    												<h3><a href="#"><?php echo $product->name ?></a></h3>
    												<p><?php echo $product->description ?>.</p>
    												<p class="price"><span>Rp. <?php echo $product->price ?></span></p>
    												<p><a href="#" class="btn btn-white btn-outline-white">Add to
    														cart</a></p>
    											</div>
    										</div>
    									</div>
    									<?php endforeach; ?>
    								</div>
    							</div>

    							<div class="tab-pane fade" id="v-pills-2" role="tabpanel"
    								aria-labelledby="v-pills-2-tab">
    								<div class="row">
    									<div class="col-md-4 text-center">
    										<div class="menu-wrap">
    											<a href="#" class="menu-img img mb-4"
    												style="background-image: url(<?php echo base_url('assets/images/drink-1.jpg'); ?> );"></a>
    											<div class="text">
    												<h3><a href="#">Lemonade Juice</a></h3>
    												<p>Far far away, behind the word mountains, far from the countries
    													Vokalia and Consonantia.</p>
    												<p class="price"><span>$2.90</span></p>
    												<p><a href="#" class="btn btn-white btn-outline-white">Add to
    														cart</a></p>
    											</div>
    										</div>
    									</div>
    									<div class="col-md-4 text-center">
    										<div class="menu-wrap">
    											<a href="#" class="menu-img img mb-4"
    												style="background-image: url(<?php echo base_url('assets/images/drink-2.jpg'); ?> );"></a>
    											<div class="text">
    												<h3><a href="#">Pineapple Juice</a></h3>
    												<p>Far far away, behind the word mountains, far from the countries
    													Vokalia and Consonantia.</p>
    												<p class="price"><span>$2.90</span></p>
    												<p><a href="#" class="btn btn-white btn-outline-white">Add to
    														cart</a></p>
    											</div>
    										</div>
    									</div>
    									<div class="col-md-4 text-center">
    										<div class="menu-wrap">
    											<a href="#" class="menu-img img mb-4"
    												style="background-image: url(<?php echo base_url('assets/images/drink-3.jpg'); ?> );"></a>
    											<div class="text">
    												<h3><a href="#">Soda Drinks</a></h3>
    												<p>Far far away, behind the word mountains, far from the countries
    													Vokalia and Consonantia.</p>
    												<p class="price"><span>$2.90</span></p>
    												<p><a href="#" class="btn btn-white btn-outline-white">Add to
    														cart</a></p>
    											</div>
    										</div>
    									</div>
    								</div>
    							</div>

    							<div class="tab-pane fade" id="v-pills-3" role="tabpanel"
    								aria-labelledby="v-pills-3-tab">
    								<div class="row">
    									<div class="col-md-4 text-center">
    										<div class="menu-wrap">
    											<a href="#" class="menu-img img mb-4"
    												style="background-image: url(<?php echo base_url('assets/images/burger-1.jpg'); ?> );"></a>
    											<div class="text">
    												<h3><a href="#">Itallian Pizza</a></h3>
    												<p>Far far away, behind the word mountains, far from the countries
    													Vokalia and Consonantia.</p>
    												<p class="price"><span>$2.90</span></p>
    												<p><a href="#" class="btn btn-white btn-outline-white">Add to
    														cart</a></p>
    											</div>
    										</div>
    									</div>
    									<div class="col-md-4 text-center">
    										<div class="menu-wrap">
    											<a href="#" class="menu-img img mb-4"
    												style="background-image: url(<?php echo base_url('assets/images/burger-2.jpg'); ?> );"></a>
    											<div class="text">
    												<h3><a href="#">Itallian Pizza</a></h3>
    												<p>Far far away, behind the word mountains, far from the countries
    													Vokalia and Consonantia.</p>
    												<p class="price"><span>$2.90</span></p>
    												<p><a href="#" class="btn btn-white btn-outline-white">Add to
    														cart</a></p>
    											</div>
    										</div>
    									</div>
    									<div class="col-md-4 text-center">
    										<div class="menu-wrap">
    											<a href="#" class="menu-img img mb-4"
    												style="background-image: url(<?php echo base_url('assets/images/burger-3.jpg'); ?> );"></a>
    											<div class="text">
    												<h3><a href="#">Itallian Pizza</a></h3>
    												<p>Far far away, behind the word mountains, far from the countries
    													Vokalia and Consonantia.</p>
    												<p class="price"><span>$2.90</span></p>
    												<p><a href="#" class="btn btn-white btn-outline-white">Add to
    														cart</a></p>
    											</div>
    										</div>
    									</div>
    								</div>
    							</div>

    							<div class="tab-pane fade" id="v-pills-4" role="tabpanel"
    								aria-labelledby="v-pills-4-tab">
    								<div class="row">
    									<div class="col-md-4 text-center">
    										<div class="menu-wrap">
    											<a href="#" class="menu-img img mb-4"
    												style="background-image: url(<?php echo base_url('assets/images/pasta-1.jpg'); ?> );"></a>
    											<div class="text">
    												<h3><a href="#">Itallian Pizza</a></h3>
    												<p>Far far away, behind the word mountains, far from the countries
    													Vokalia and Consonantia.</p>
    												<p class="price"><span>$2.90</span></p>
    												<p><a href="#" class="btn btn-white btn-outline-white">Add to
    														cart</a></p>
    											</div>
    										</div>
    									</div>
    									<div class="col-md-4 text-center">
    										<div class="menu-wrap">
    											<a href="#" class="menu-img img mb-4"
    												style="background-image: url(<?php echo base_url('assets/images/pasta-2.jpg'); ?> );"></a>
    											<div class="text">
    												<h3><a href="#">Itallian Pizza</a></h3>
    												<p>Far far away, behind the word mountains, far from the countries
    													Vokalia and Consonantia.</p>
    												<p class="price"><span>$2.90</span></p>
    												<p><a href="#" class="btn btn-white btn-outline-white">Add to
    														cart</a></p>
    											</div>
    										</div>
    									</div>
    									<div class="col-md-4 text-center">
    										<div class="menu-wrap">
    											<a href="#" class="menu-img img mb-4"
    												style="background-image: url(<?php echo base_url('assets/images/pasta-3.jpg'); ?> );"></a>
    											<div class="text">
    												<h3><a href="#">Itallian Pizza</a></h3>
    												<p>Far far away, behind the word mountains, far from the countries
    													Vokalia and Consonantia.</p>
    												<p class="price"><span>$2.90</span></p>
    												<p><a href="#" class="btn btn-white btn-outline-white">Add to
    														cart</a></p>
    											</div>
    										</div>
    									</div>
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