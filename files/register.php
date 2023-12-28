<!DOCTYPE HTML>
<html>

<head>
	<title></title>
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>

	<div class="header">
		<div class="wrap">
			<div class="header-bot">
				<div class="logo">
					<a href="index.html"><img src="images/logo.png" alt="" style="width:450px; height: 160px;"></a>
				</div>


				<div class="cart">


					<div class="menu-main">

						<ul class="dc_css3_menu">
							<li><a href="index.php">Home</a></li>
							<li><a href="aboutus.html">About</a></li>
							<li><a href="services.php">Brands</a></li>
							<li><a href="contact.php">Contact</a></li>
							<li><a href="login.php">Login</a></li>
							<li class="active"><a href="register.php">Signup</a></li>
						</ul>

						<div class="clear"></div>
					</div>

				</div>


				<div class="clear"></div>
			</div>
		</div>
	</div>
	<div class="header-bottom">
		<div class="wrap">
			<div class="page-not-found">
				<div class="text-center">
					<h2>User Account Registration
					</h2>
				</div>

				<div class="container-fluid row">

					<div class="col-md-3"></div>


					<div class="col-md-6">

						<!-- <form class="text-center" action="register.php" method="post">

							<div>
								<label>Name</label>
								<input type="text" class="form-control transparent-input" size="50"
									placeholder="YOUR NAME " name="username" required>
							</div>

							<div><br />
								<label>Email</label>
								<input type="text" class="form-control transparent-input" size="50"
									placeholder="YOUR EMAIL" name="useremail" required>
							</div>


							<div><br />
								<label>Adress</label>
								<input type="text" class="form-control transparent-input" size="50"
									placeholder="YOUR ADDRESS" name="useraddress" required>
							</div>


							<div><br />
								<label>phone</label>
								<input type="text" class="form-control transparent-input" size="50"
									placeholder="YOUR PHONE NUMBER" name="userphone" required>
							</div>

							<div><br />
								<label>PASSWORD</label>
								<input type="password" class="form-control transparent-input" size="50"
									placeholder="PASSWORD PLEASE" name="pass" required>
							</div>

							<div><br />
								<button type="submit" name="reg" class="btn btn-warning" value="reg">Sign up</button>
							</div>
						</form> -->
						<form class="text-center" action="register.php" method="post" onsubmit="return validateForm()">

							<div>
								<label for="username">Name</label>
								<input type="text" class="form-control transparent-input" size="50"
									placeholder="YOUR NAME" name="username" id="username" required>
							</div>

							<div><br />
								<label for="useremail">Email</label>
								<input type="email" class="form-control transparent-input" size="50"
									placeholder="YOUR EMAIL" name="useremail" id="useremail" required>
								<div id="email-error-msg" class="error-msg"></div>
							</div>

							<div><br />
								<label for="useraddress">Address</label>
								<input type="text" class="form-control transparent-input" size="50"
									placeholder="YOUR ADDRESS" name="useraddress" id="useraddress" required>
							</div>

							<div><br />
								<label for="userphone">Phone</label>
								<input type="tel" class="form-control transparent-input" size="50"
									placeholder="YOUR PHONE NUMBER" name="userphone" id="userphone" required>
							</div>

							<div><br />
								<label for="pass">Password</label>
								<input type="password" class="form-control transparent-input" size="50"
									placeholder="PASSWORD PLEASE" name="pass" id="pass" required>
								<div id="password-error-msg" class="error-msg"></div>
							</div>

							<div><br />
								<button type="submit" name="reg" class="btn btn-warning" value="reg">Sign up</button>
							</div>

						</form>

						<script>
							function validateForm() {
								var username = document.getElementById("username").value;
								var email = document.getElementById("useremail").value;
								var password = document.getElementById("pass").value;
								var phone = document.getElementById("userphone").value;

								// Check if the username contains only letters and spaces
								if (!/^[a-zA-Z ]+$/.test(username)) {
									alert("Name should contain only letters and spaces");
									return false;
								}

								// Check if the email address is valid
								if (!validateEmail(email)) {
									document.getElementById("email-error-msg").innerHTML = "Please enter a valid email address";
									return false;
								} else {
									document.getElementById("email-error-msg").innerHTML = "";
								}

								// Check if the password is at least 8 characters long
								if (password.length < 8) {
									document.getElementById("password-error-msg").innerHTML = "Password must be at least 8 characters long";
									return false;
								} else {
									document.getElementById("password-error-msg").innerHTML = "";
								}

								// Check if the phone number contains only digits and is 10 digits long
								if (!/^[0-9]{10}$/.test(phone)) {
									alert("Phone number should contain only 10 digits");
									return false;
								}

								return true;
							}

							function validateEmail(email) {
								var re = /\S+@\S+\.\S+/;
								return re.test(email);
							}
						</script>

					</div>

					<div class="col-md-3"></div>

				</div>
			</div>
		</div>
	</div>

	<div class="footer">
		<div class="wrap">
			<div class="footer-top">
				<div class="col_1_of_5 span_1_of_5">
					<div class="footer-grid twitts">
						<h3>Our Company</h3>
						<div class="f_menu">
							<ul>
								<li>This is a CAR selling dealer</li>
								<li>Please read our Terms and Conditions </li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col_1_of_5 span_1_of_5">
					<div class="footer-grid twitts">
						<h3>Get in touch</h3>
						<ul class="follow_icon">
							<li><a href="#" style="opacity: 1;"><img src="images/follow_icon.png" alt=""></a></li>
							<li><a href="#" style="opacity: 1;"><img src="images/follow_icon1.png" alt=""></a></li>
							<li><a href="#" style="opacity: 1;"><img src="images/follow_icon2.png" alt=""></a></li>
							<li><a href="#" style="opacity: 1;"><img src="images/follow_icon3.png" alt=""></a></li>
							<li><a href="#" style="opacity: 1;"><img src="images/follow_icon4.png" alt=""></a></li>
							<li><a href="#" style="opacity: 1;"><img src="images/follow_icon5.png" alt=""></a></li>
						</ul>
						<p>+91 7990280714</p>
						<span>support@abc.com</span>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>

</body>

</html>

<?php
$db = mysqli_connect("localhost", "root", "Kushal@MySQL", "car_showroom");

// REGISTER USER
if (isset($_POST['reg'])) {

	// receive all input values from the form
	$username = $_POST['username'];
	$useremail = $_POST['useremail'];
	$password = $_POST['pass'];
	$userphone = $_POST['userphone'];
	$useraddress = $_POST['useraddress'];

	if ($useremail != '' || $username != '' || $password != '' || $userphone != '' || $useraddress != '') {
		$query = "CALL register('$username','$useremail','$password','$userphone','$useraddress')";

		mysqli_query($db, $query);

		$message = "registration done ! ";
		echo "<script type='text/javascript'>alert('$message');</script>";


	}

}

?>