<?php $this->load->view('admin/components/page_head'); ?>
<body class="page-header-fixed page-quick-sidebar-over-content">
<div class="page-header navbar navbar-default">
	<div class="page-header-inner">
		<div class="page-logo">
			<?php echo anchor('admin/dashboard','MEGA GAS','class="logo" '); ?>
		</div>
	
		</div>
	</div>
	<div class="clear-fix"></div>
	<!-- End of Navigation -->
	

	<div class="container">
			<div class="row">

				<div class="col-md-12">
					<h3 class="page-title">
					Cylinder Management  
					</h3>

					<div class="portlet-body">
								<div class="tabbable">
									<ul class="nav nav-tabs">
										<li class="active">
											<a href="#tab_category" data-toggle="tab">
											Cylinder List </a>
										</li>
										<li>
											<a href="#tab_addcat" data-toggle="tab">
											<i class="fa fa-plus-circle"></i>	
											Add Cylinder </a>
										</li>
										
									</ul>
									<div class="tab-content no-space">
									<div class="tab-pane active" id="tab_category">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box blue-hoki">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-shopping-cart"></i> Cylinders
							</div>
							<div class="tools">
							</div>
						</div>
						<div class="portlet-body">
							<table class="table table-striped table-bordered table-hover" id="sample_1">
							<thead>
							<tr>
								<th>
									 Type
								</th>
								<th>
									 Serial No
								</th>
								<th>
									 Price
								</th>
								<th>
									Action
								</th>
							</tr>
							</thead>
							<tbody>
															<!-- calling all product Categories -->
															<?php if(count($products)): foreach($products as $product): ?>

									  <?php
             								$query = $this->db->get_where('category', array('id' => $product->product_id));
                                                                  $res = $query->result_array();
                                                                  foreach ($res as $rows);                                         
									 ?>
										<tr>
											<td><?php echo  $rows['product_name']; ?></td>
											<td><?php echo  $product->serial_no; ?></td>
											<td><?php echo  $product->price; ?></td>
											<td><?php echo anchor('admin/products/edit/' . $product->id, 'Edit'); ?> | <?php echo anchor('admin/products/delete/' . $product->id, 'Delete'); ?></td>
										</tr>
														<?php endforeach; ?>
														<?php else: ?>
										<tr>
											<td colspan="3">We could not find any Cylinder.</td>
										</tr>
								<?php endif; ?>	

							</tbody>
							</table>
						</div>
					</div>

						</div>
						<div class="tab-pane" id="tab_addcat">
			<div class="alert alert-danger display-hide">
				<button class="close" data-close="alert"></button>
				<?php echo validation_errors(); ?>
			</div>
			<?php echo form_open();?>
						<div class="form-body">
												<div class="form-group">
													<label class="col-md-2 control-label " for="prod_code">Cylinder Type: 
													</label>
													<div class="col-md-10">
											<select name="product_id" class="form-control" required style=" text-transform: capitalize;">
								                          <!-- Calling all Product CAtegory by Product Name -->
								                              <?php 
																		$products = $this->db->get('category')->result_array();
																		foreach($products as $row):
																			?>
								                                    		<option value="<?php echo $row['id'];?>">
																					<?php echo $row['product_name'];?>
								                                              </option>
								                                        <?php	endforeach; ?>
														
                        								</select>
													</div>
												</div>

												<div class="form-group">
													<label class="col-md-2 control-label" for="serial">Serial No: 
													</label>
													<div class="col-md-10">
														<input type="text" class="form-control" name="serial" required>
													</div>
												</div>

												<div class="form-group">
													<label class="col-md-2 control-label" for="price">Price: 
													</label>
													<div class="col-md-10">
														<input type="number" class="form-control" name="price" required>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label"></label>
													<div class="col-md-10">
														<button type="submit" class="btn green"><i class="fa fa-send"></i> Save </button>
													</div>
													
												</div>
						</div>
			<?php echo form_close(); ?>					
						</div>
						<div class="clear-fix"></div>
				</div>
			</div>
	</div>
								<!-- End of Tab Product Category -->
				
</div>
</div>
</div>
</div>

    <div class="modal fade" id="basic" tabindex="-1" role="basic" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                      <h4 class="modal-title">Modal Title</h4>
                    </div>
                    <div class="modal-body">
                       Modal body goes here
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn default" data-dismiss="modal">Close</button>
                      <button type="button" class="btn blue">Save changes</button>
                    </div>
                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>

<!-- END CONTAINER -->

<!-- BEGIN FOOTER -->
<div class="page-footer">
  <div class="page-footer-inner">
    <p>Elapsed Time <strong>{elapsed_time}</strong> seconds</p>
  </div>
  <div class="page-footer-tools">
    <span class="go-top">
    <i class="fa fa-angle-up"></i>
    </span>
  </div>
</div>
<?php $this->load->view('admin/components/page_tail'); ?>