<?php
include 'header.php'
?>
<div class="blank1">
	
</div>
<div class="row my-5">
	<div class="col-2"></div>
	<div class="col-4">
		<img src="https://assets.website-files.com/5d039044301183e579612c2b/5d039044301183a5b0612c8e_payment-secureloading.gif" class="img-fluid">
	</div>
	<div class="col-4">
		<form method="post">
			<p class="h4 text-center">Login</p>
			<label>Email or Phone</label>
			<input type="text" name="phone" class="form-control">
			<label>Password</label>
			<input type="password" name="password" class="form-control"><br>
			<button class="btn btn-primary mt-2">Login</button>
			<a href="signup.php"><button class="btn btn-info mt-2" type="button">SignUp</button></a><br><br>
			<a href="#" class="mt-4">Forgot Password ?</a>
		</form>
	</div>
	<div class="col-2"></div>
</div>
<div class="blank1">
	
</div>

<?php
include 'footer.php'
?>

</body>
</html>