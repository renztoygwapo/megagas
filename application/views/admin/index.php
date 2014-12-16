<?php $this->load->view('admin/components/page_head'); ?>


	<div class="container">
	<h3>
			WELCOME <small><?php echo $this->session->userdata('username'); ?></small>
			</h3>
	<div class="row">
		<div class="col-md-12">
			
			
			<div class="tiles">
				<div class="tile double-down bg-blue-hoki" id="products">
					<div class="tile-body">
						<i class="fa fa-shopping-cart"></i>
					</div>
					<div class="tile-object">
						<div class="name">
							 PRODUCTS
						</div>
						<div class="number">
							 100
						</div>
					</div>
				</div>
				<div class="tile bg-red-sunglo" id="prod_category">
					<div class="tile-body">
						<i class="fa  fa-tasks"></i>
					</div>
					<div class="tile-object">
						<div class="name">
							 PRODUCT CATEGORY
						</div>
						<div class="number">
							 <?php echo $this->db->count_all('category');?>
						</div>
					</div>
				</div>
			
				<div class="tile bg-yellow-saffron" id="customer">
					<div class="corner">
					</div>
					<div class="tile-body">
						<i class="fa fa-users"></i>
					</div>
					<div class="tile-object">
						<div class="name">
							 CUSTOMERS
						</div>
						<div class="number">
							 452
						</div>
					</div>
				</div>
				<div class="tile double bg-blue-madison">
					<div class="tile-body">
						<i class="fa fa-exchange"></i>
						<div class="name">
							 MOVEMENTS
						</div>
						<div class="number">
							 24
						</div>
					</div>
			
				</div>
				<div class="tile bg-purple-studio">
					<div class="tile-body">
						<i class="fa  fa-book"></i>
					</div>
					<div class="tile-object">
						<div class="name">
							 AREA
						</div>
						<div class="number">
							 13
						</div>
					</div>
				</div>
				<div class="tile bg-blue">
					<div class="tile-body">
						<i class="fa  fa-cubes"></i>
					</div>
					<div class="tile-object">
						<div class="name">
							 PRODUCTION
						</div>
						<div class="number">
							 3
						</div>
					</div>
				</div>

				<div class="tile bg-green-meadow">
					<div class="tile-body">
						<i class="fa  fa-money"></i>
					</div>
					<div class="tile-object">
						<div class="name">
							 PAYMENTS
						</div>
						<div class="number">
							 12
						</div>
					</div>
				</div>
				<div class="tile double bg-green">
					<div class="tile-body">
						<i class="fa fa-mail-reply"></i>
						<div class="name">
							 LOAD IN
						</div>
						<div class="number">
							 12
						</div>
					</div>
				</div>

				<div class="tile double bg-red">
					<div class="tile-body">
						<i class="fa  fa-mail-forward"></i>
						<div class="name">
							 LOAD OUT
						</div>
						<div class="number">
							 16
						</div>
					</div>
				</div>
				
					<div class="tile bg-blue-steel">
					<div class="tile-body">
						<i class="fa fa-user"></i>
					</div>
					<div class="tile-object">
						<div class="name">
							 SALES MAN
						</div>
						<div class="number">
							 8
						</div>
					</div>
				</div>

				<div class="tile bg-green">
					<div class="tile-body">
						<i class="fa fa-bar-chart-o"></i>
					</div>
					<div class="tile-object">
						<div class="name">
							 Reports
						</div>
						<div class="number">
						</div>
					</div>
				</div>
			
		
				<div class="tile bg-yellow-lemon selected">
					<div class="corner">
					</div>
					<div class="check">
					</div>
					<div class="tile-body">
						<i class="fa fa-cogs"></i>
					</div>
					<div class="tile-object">
						<div class="name">
							 Settings
						</div>
					</div>
				</div>
				<div class="tile bg-red" id="logout">
					<div class="tile-body">
						<i class="fa  fa-power-off"></i>
					</div>
					<div class="tile-object">
						<div class="name">
							 LOGOUT
						</div>
						
					</div>
				</div>
			</div>

		</div>

			<!-- END PAGE CONTENT-->
	</div>
	</div>
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