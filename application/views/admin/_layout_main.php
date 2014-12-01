<?php $this->load->view('admin/components/page_head'); ?>
<body>
    <div class="navbar navbar-static-top navbar-inverse">
	    <div class="navbar-inner">
		    <a class="brand" href="<?php echo site_url('admin/dashboard'); ?>">Welcome <?php echo $this->session->userdata('username'); ?></a>
		    <ul class="nav">
			    <li class="active"><a href="<?php echo site_url('admin/dashboard'); ?>">Dashboard</a></li>
			    <li><?php echo anchor('admin/products', 'Products'); ?></li>
			    <li><?php echo anchor('admin/customer', 'Customers'); ?></li>

		    </ul>
	    </div>
    </div>

<?php $this->load->view('admin/components/page_tail'); ?>