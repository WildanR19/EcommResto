<div class="tab-pane fade show active" id="v-pills-0" role="tabpanel" aria-labelledby="v-pills-0-tab">
    <div class="row">
        <?php foreach ($products->result() as $row) : ?>
            <div class="col-md-4">
                <div class="thumbnail">
                    <img src="<?php echo base_url().'gambar/'.$row->image;?>" style="height:200px; object-fit: cover; object-position: center;">
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
    <div class="row mt-5">
        <div class="col text-center">
          <?php echo $pagination; ?>
        </div>
    </div>
</div>
    
<div class="tab-pane fade" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
    <div class="row">
    <?php foreach ($pasta->result() as $row) : ?>
            <div class="col-md-4">
                <div class="thumbnail">
                    <img src="<?php echo base_url().'gambar/'.$row->image;?>" style="height:200px; object-fit: cover; object-position: center;">
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

<div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
    <div class="row">
    <?php foreach ($pizza->result() as $row) : ?>
        <div class="col-md-4">
            <div class="thumbnail">
                <img src="<?php echo base_url().'gambar/'.$row->image;?>" style="height:200px; object-fit: cover; object-position: center;">
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
    <!--<div class="row">
        <div class="col">
            <?php echo $pagination; ?>
        </div>
    </div>-->
</div>

<div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
    <div class="row">
    <?php foreach ($drink->result() as $row) : ?>
        <div class="col-md-4">
            <div class="thumbnail">
                <img src="<?php echo base_url().'gambar/'.$row->image;?>" style="height:200px; object-fit: cover; object-position: center;">
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
    <!--<div class="row">
        <div class="col">
            <?php echo $pagination; ?>
        </div>
    </div>-->
</div>

<div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab">
    <div class="row">
    <?php foreach ($other->result() as $row) : ?>
        <div class="col-md-4">
            <div class="thumbnail">
                <img src="<?php echo base_url().'gambar/'.$row->image;?>" style="height:200px; object-fit: cover; object-position: center;">
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
    <!--<div class="row">
        <div class="col">
            <?php echo $pagination; ?>
        </div>
    </div>-->
</div>