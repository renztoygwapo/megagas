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
    <?php
            //var_dump($product_id);
             // $query = $this->db->get_where('category', array('id' => $product_id));
             //                                                      $res = $query->result_array();
             //                                                      foreach ($res as $rows);
            ?>
	
	<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3 class="page-title">
					Edit Customer
					</h3>
					<div class="portlet-body">
								<div class="tabbable">
									<ul class="nav nav-tabs">
										<li class="active">
											<a href="#tab_addcat" data-toggle="tab">
											Edit </a>
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
													<label class="col-md-2 control-label" for="serial_no">Customer Name: 
													</label>
													<div class="col-md-10">
														<?php echo form_input('customer_name',set_value('customer_name', $customer_name),'class="form-control" '); ?>
													</div>
												</div>

												<div class="form-group">
													<label class="col-md-2 control-label" for="price">Address: 
													</label>
													<div class="col-md-10">
														<?php echo form_input('address',set_value('address', $address),'class="form-control"'); ?>
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
                                                                                      <label class="col-md-2 control-label" for="price">Contact Number: 
                                                                                      </label>
                                                                                      <div class="col-md-10">
                                                                                        <?php echo form_input('contact_no',set_value('contact_no', $contact_no),'class="form-control"'); ?>
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