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
					LOAD IN 
					</h3>

					<div class="portlet-body">
							
					<div class="row">
						<div class="col-lg-12">
							<?php echo form_open(); ?>

						<div class="form-body">

									

									<div class="form-group">
									<label class="col-md-2 control label" for="date"> Product: </label>
									<div class="col-md-10">
														<input type="text" class="form-control" name="product" required>
									</div>
									</div>

									<div class="form-group">
									<label class="col-md-2 control label" for="date"> Date: </label>
									<div class="col-md-10">
														<input type="date" class="form-control" name="date" required>
									</div>
									</div>

									<div class="form-group">
									<label class="col-md-2 control label" for="date"> Sales Man: </label>
									<div class="col-md-10">
										<select name="salesman" class="form-control">
											<option>---SELECT SALESMAN---</option>
											<option>JOVALNI MAPULA</option>
											<option>JOSEPH LAURENTE</option>
											<option>FRITZ BRYAN FORTUNA</option>


										</select>
									</div>
									</div>

									<div class="form-group">
									<label class="col-md-2 control label" for="date"> DRIVER: </label>
									<div class="col-md-10">
										<select name="salesman" class="form-control">
											<option>---SELECT DRIVER---</option>
											<option>GLEO BIOTOMAS</option>
											<option>ERIC GOLLODO</option>
											<option>ROFER MORALES</option>
										</select>
									</div>
									</div>


									<div class="form-group">
									<label class="col-md-2 control label" for="date"> PLATE NO: </label>
									<div class="col-md-10">
														<input type="text" class="form-control" name="plate_no" required>
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
					</div>

					</div>
								<!-- End of Tab Product Category -->
				
</div>
</div>
</div>
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