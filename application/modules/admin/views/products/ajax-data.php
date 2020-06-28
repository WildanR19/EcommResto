<div class="table-responsive">
							<table class="table table-hover table-bordered" width="100%" cellspacing="0">
								<thead class="thead-light">
									<tr>
										<th class="text-center">Name</th>
										<th class="text-center">Price</th>
										<th class="text-center">Photo</th>
										<th class="text-center">Description</th>
										<th class="text-center">Category</th>
										<th class="text-center">Action</th>
									</tr>
								</thead>
								<tbody>								
									<?php 
									if(!empty($products)){
										foreach ($products as $product){ ?>
											<tr>
												<td><?php echo $product["name"] ?></td>
												<td><?php echo $product["price"] ?></td>
												<td><img src="<?php echo base_url('gambar/'.$product["image"]) ?>" width="64" /></td>
												<td class="small"><?php echo substr($product["description"], 0, 120) ?>...</td>
												<td><?php echo $product["category"] ?></td>
												<td class="text-center">
													<a href="<?php echo base_url('admin/products/edit/'.$product["product_id"]) ?>"
														class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
													<a onclick="deleteConfirm('<?php echo base_url('admin/products/delete/'.$product["product_id"]) ?>')"
														href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
												</td>
											</tr>
										<?php }
									}else{ // Jika data tidak ada
										echo "<tr><td colspan='4'>Data Not Found</td></tr>";
									} ?>
								
								</tbody>
							</table>
						</div>

						<div class="row">
							<div class="col">
								<?php echo $this->ajax_pagination->create_links(); ?>
							</div>
						</div>