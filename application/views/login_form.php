<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css"
  rel="stylesheet"
/>
<style>
	.gradient-custom {
/* fallback for old browsers */
background: #6a11cb;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
}
</style>
</head>

<body>
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

		  <div class="mb-md-5 mt-md-4 pb-5">



	<div class="container">
		<h1 class="fw-bold mb-2 text-uppercase">Login</h1>
		<hr>

		<?php if($this->session->flashdata('message_login_error')): ?>
					<?= $this->session->flashdata('message_login_error') ?>
		<?php endif ?>

		<form action="" method="post" style="max-width: 600px;">
			<div>
			<div class="form-outline form-white mb-4">
				<input type="text" name="username" class="<?= form_error('username') ? 'invalid' : '' ?> form-control form-control-lg"
					placeholder="Your username or email" value="<?= set_value('username') ?>" required />
					<label class="form-label" for="username">Email/Username</label>
				<div class="invalid-feedback">
					<?= form_error('username') ?>
				</div>
			</div>
			</div>
			<div>
			<div class="form-outline form-white mb-4">
				<input type="password" name="password" class="<?= form_error('password') ? 'invalid' : '' ?> form-control form-control-lg"
					placeholder="Enter your password" value="<?= set_value('password') ?>" required />
					<label class="form-label" for="password">Password</label>
				<div class="invalid-feedback">
					<?= form_error('password') ?>
				</div>
			</div>
			</div>

			<div>
				<input type="submit" class="btn btn-outline-light btn-lg px-5" value="Login">
			</div>

			
		</form>
	</div>
		  </div>
			
		</div>
	  </div>
	</div>
  </div>
  </div>
</section>
</body>
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"
></script>

</html>