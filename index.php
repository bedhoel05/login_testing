<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Page</title>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="position-middle">
    <form class="col align-self-centre" action="check_login.php" method="post">
		<div class="container">
			<div class="row justify-content-sm-center">
                <!-- Image Logo -->
					<div class="text-center my-5">
						<img src="./assets/img/lampung-tengah.png" alt="logo" width="100">
					</div>
                <!-- Login Card -->
					<div class="card shadow-lg">
						<div class="card-body p-5">
							<h1 class="fs-4 card-title fw-bold mb-4">Login</h1>
							<form method="POST" class="needs-validation" autocomplete="off" >
								<div class="mb-3">
									<label class="mb-2 text-muted" for="email">Username</label>
									<input id="username" class="form-control" name="username" value="" placeholder="Masukan Username" required autofocus>
									<div class="invalid-feedback">
										Email is invalid
									</div>
								</div>

								<div class="mb-3">
									<div class="mb-2 w-100">
										<label class="text-muted" for="password">Password</label>
										<a href="forgot.php" class="float-end">
											Forgot Password?
										</a>
									</div>
									<input id="password" type="password" class="form-control" name="password" required>
								    <div class="invalid-feedback">
								    	Password is required
							    	</div>
								</div>

								<div class="d-flex align-items-center">
									<button type="submit" class="btn btn-primary ms-auto">
										Login
									</button>
								</div>
							</form>
						</div>
						<div class="card-footer py-3 border-0">
							<div class="text-center">
								Tidak memiliki akun ? <a href="register.php" class="text-dark">Register</a>
							</div>
						</div>
					</div>
					<div class="text-center mt-5 text-muted">
						Copyright &copy; 2025 &mdash; Inspektorat Lampung Tengah
					</div>
			</div>
		</div>
</form>

	<script src="js/login.js"></script>
    </body>
</html>
<script src="assets/js/bootstrap.bundle.min.js"></script>