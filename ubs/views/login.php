<!DOCTYPE html>
<html lang="en">

<head>
	<title>UBS Patrol</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url('jquery_data_table/css/login.css');?>" />
	<link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

</head>

<body>
	<h1 id="heading1">Login Admin</h1>
	<img src="https://img.icons8.com/cute-clipart/344/login-rounded-right.png" alt="Login Logo" style="width:100px; height:100px;">


	<div>

		<?php if($this->session->flashdata('message_login_error')): ?>
			<div class="invalid-feedback">
					<?= $this->session->flashdata('message_login_error') ?>
			</div>
		<?php endif ?>

		<form action="" method="post" class="myForm">
			<div>
				<div class="input-container">
                 <i class="fa fa-envelope icon"></i>
				<input type="text" name="username" class="input-field"
					placeholder="USERNAME" value="<?= set_value('username') ?>" required />
				
				<div class="invalid-feedback">
					<?= form_error('username') ?>
				</div>
				</div>
			</div>
			<div class="input-container">
                <i class="fa fa-key icon"></i>
				<input type="password" name="password" class="input-field"
					placeholder="PASSWORD" value="<?= set_value('password') ?>" required />
				<div class="invalid-feedback">
					<?= form_error('password') ?>
				</div>
			</div>

			<div>
				<input type="submit" class="bttn" value="Login">
			</div>
		</form>
	</div>

</body>

</html>