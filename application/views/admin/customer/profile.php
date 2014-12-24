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
					<h2 class="page-title">
					<?php echo $customer_name;?>
					</h2>
					<div class="row">
						<div class="col-lg-6">
							<p>Address: <?php echo $address;?></p>
							<p>Area No: <?php echo $area_no;?></p>
							<p>Contact No: <?php echo $contact_no;?></p>
						</div>

						<div class="col-lg-6">
							<h3>Cylinder Price</h3>
						</div>
					</div>

					<div class="portlet-body">
								<div class="tabbable">
									<ul class="nav nav-tabs">
										<li class="active">
											<a href="#tab_category" data-toggle="tab">
											Customer Records </a>
										</li>
										<li>
											<a href="#tab_addcat" data-toggle="tab">
											<i class="fa fa-plus-circle"></i>	
											Add Customer </a>
										</li>
										
									</ul>
									<div class="tab-content no-space">
									<div class="tab-pane active" id="tab_category">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box blue-hoki">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-shopping-cart"></i> Customer
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
									Status
								</th>
							</tr>
							</thead>
							<tbody>
								
								<tr>
									<td>Argon</td>
									<td>443</td>
									<td>UnReturn</td>
								</tr>

								<tr>
									<td>Industrial Oxygen</td>
									<td>347</td>
									<td>UnReturn</td>
								</tr>


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
													<label class="col-md-2 control-label" for="customer_name">Customer Name: 
													</label>
													<div class="col-md-10">
														<input type="text" class="form-control" name="customer_name" required autofocus>
													</div>
						</div>
						<div class="form-group">
													<label class="col-md-2 control-label" for="address">Address: 
													</label>
													<div class="col-md-10">
														<input type="text" class="form-control" name="address" required>
													</div>
						</div>
												<div class="form-group">
													<label class="col-md-2 control-label " for="area_no">Area Number: 
													</label>
													<div class="col-md-10">
											<select name="area_no" class="form-control" required>
								                          <option value="1">AREA 1</option>
												<option value="2">AREA 2</option>
												<option value="3">AREA 3</option>
												<option value="4">AREA 4</option>
												<option value="5">AREA 5</option>
												<option value="6">AREA 6</option>
												<option value="7">AREA 7</option>		
												<option value="8">AREA 8</option>
												<option value="9">AREA 9</option>
												<option value="10">AREA 10</option>
                        								</select>
													</div>
												</div>

												<div class="form-group">
													<label class="col-md-2 control-label" for="contact_no">Contact Number: 
													</label>
													<div class="col-md-10">
														<input type="text" class="form-control" name="contact_no" required>
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