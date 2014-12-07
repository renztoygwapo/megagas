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
					Edit Product Category 
					</h3>

					<div class="portlet-body">
								<div class="tabbable">
									<ul class="nav nav-tabs">
										<li class="active">
											<a href="#tab_addcat" data-toggle="tab">
											Edit Category </a>
										</li>
									
									</ul>
									<div class="tab-content no-space">
								
						<div class="tab-pane active" id="tab_addcat">
			<div class="alert alert-danger display-hide">
				<button class="close" data-close="alert"></button>
				<?php echo validation_errors(); ?>
			</div>
			<?php echo form_open();?>
						<div class="form-body">
												<div class="form-group">
													<label class="col-md-2 control-label " for="prod_code">Product Code: 
													</label>
													<div class="col-md-10">
														<?php echo form_input('prod_code',set_value('prod_code', $product_code),'class="form-control"'); ?>
													</div>
												</div>

												<div class="form-group">
													<label class="col-md-2 control-label" for="prod_name">Product Name: 
													</label>
													<div class="col-md-10">
														<?php echo form_input('prod_name',set_value('prod_name', $product_name),'class="form-control" '); ?>
													</div>
												</div>

												<div class="form-group">
													<label class="col-md-2 control-label" for="prod_desc">Product Description: 
													</label>
													<div class="col-md-10">
														<?php echo form_input('prod_desc',set_value('prod_desc', $product_desc),'class="form-control"'); ?>
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