<?php $this->load->view('admin/components/page_head'); ?>

	<div class="page-content-wrapper">

			<h3 class="page-title">
			Product Categories 
			</h3>
			<a href="<?php echo site_url('admin/dashboard/index'); ?>">Back to Home</a>
			<a href="<?php echo site_url('admin/category/add'); ?>" class="btn btn-primary">Add Product Category</a>
			<br />
			<div class="row">
				<div class="col-md-10">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box blue-hoki">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-shopping-cart"></i>Product Categories
							</div>
							<div class="tools">
							</div>
						</div>
						<div class="portlet-body">
							<table class="table table-striped table-bordered table-hover" id="sample_1">
							<thead>
							<tr>
								<th>
									Product Code
								</th>
								<th>
									 Product Name
								</th>
								<th>
									 Product Description
								</th>
							
							</tr>
							</thead>
							<tbody>
							<?php if(count($categories)): foreach($categories as $category): ?>	
		<tr>
			<td><?php echo  $category->product_code; ?></td>
			<td><?php echo $category->product_name; ?></td>
			<td><?php echo $category->product_desc; ?></td>
		</tr>
<?php endforeach; ?>
<?php else: ?>
		<tr>
			<td colspan="3">We could not find any users.</td>
		</tr>
<?php endif; ?>	
						
							</tbody>
							</table>
						</div>
					</div>
	
					</div>
					</div>
					</div>
				

</body>
<!-- END BODY -->
</html>
	</div>
<?php $this->load->view('admin/components/page_tail'); ?>