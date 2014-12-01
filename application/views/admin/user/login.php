<body class="login">
<!-- BEGIN LOGO -->
<div class="logo">
	<a href="index.html">
	<img src="../../assets/admin/layout/img/logo-big.png" alt=""/>
	</a>
</div>

<!-- END SIDEBAR TOGGLER BUTTON -->
<!-- BEGIN LOGIN -->
<div class="content">
	<!-- BEGIN LOGIN FORM -->
	<div class="alert alert-danger display-hide">
	<button class="close" data-close="alert"></button>
	<?php echo validation_errors(); ?>
	</div>
	<?php echo form_open();?>
		<h3 class="form-title">Login to your account</h3>
		<div class="alert alert-danger display-hide">
			<button class="close" data-close="alert"></button>
			<span>Enter any username and password. </span>
		</div>
		<div class="form-group">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
		
			<label class="control-label visible-ie8 visible-ie9">Username</label>
			<div class="input-icon">
				<i class="fa fa-user"></i>
					<?php 
							$data = array(
							              'name'        => 'username',
							              'placeholder'          => 'Username',
							              'class'       => 'form-control placeholder-no-fix',
							              'autofocus' => TRUE,
							              'required' => TRUE,
							            );
						?>
						<?php echo form_input($data); ?>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Password</label>
			<div class="input-icon">
				<i class="fa fa-lock"></i>
				<?php 
							$data = array(
							              'name'        => 'password',
							              'placeholder'          => 'Password',
							              'class'       => 'form-control placeholder-no-fix',
							              'autocomplete' => 'off',
							              'required' => TRUE,
							            );
						?>
						<?php echo form_password($data); ?>
			</div>
		</div>
		<div class="form-actions">
		<?php echo form_submit('submit', 'Log in', 'class="btn green pull-right"'); ?>
		<i class="m-icon-swapright m-icon-white"></i>
		</div>
		&copy; <?php echo date('Y'); ?> <?php echo $meta_title; ?>
	
<?php echo form_close();?>
	<!-- END LOGIN FORM -->
</div>
