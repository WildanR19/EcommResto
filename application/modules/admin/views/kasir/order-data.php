<div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead class="thead-dark text-center">
                                <tr>
                                    <th>Order ID</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Customer Name</th>
                                    <th>Table Number</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($order)){
                                foreach($order as $row){ ?>
                                <tr>
                                    <td><?=$row['order_id']?></td>
                                    <td><?=$row['date']?></td>
                                    <td><?=$row['status']?></td>
                                    <td><?=$row['customer_name']?></td>
                                    <td><?=$row['table_number']?></td>
                                    <td class="text-center">
                                        <?=anchor(	'admin/kasir/detail/' . $row['order_id'], 
                                                    'Details',
                                                    ['class'=>'btn btn-default btn-info'])
                                        ?> 
                                        <a onclick="bayarConfirm('<?php echo base_url('admin/kasir/bayar/'.$row['order_id']) ?>')"
														href="#!" class="btn btn-primary">Bayar</a>
                                    </td>
                                </tr>
                                <?php } }else{ echo "<tr><td colspan='6'>Data Not Found</td></tr>"; } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col">
                            <?php echo $this->ajax_pagination->create_links(); ?>
                        </div>
					</div>