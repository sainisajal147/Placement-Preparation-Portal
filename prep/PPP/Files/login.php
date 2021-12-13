<?php
	include('includes/header.php');

	// Initialize the session
	session_start();

	// Check if the user is already logged in, if yes then redirect
	if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
		// Redirect user according to level
		if($_SESSION["level"] === "super")
			header("location: Question_Approval.php");

		if($_SESSION["level"] === "admin")
			header("location: Question_Sharing.php");

		if($_SESSION["level"] === "student")
			header("location: Home.php");
		
		exit;
	}

	// Include config file
	require_once "config.php";

	// Define variables and initialize with empty values
	$username = $password = $level = "";
	$username_err = $password_err = $uperror = "";

	// Processing form data when form is submitted
	if($_SERVER["REQUEST_METHOD"] == "POST") {

		// Check if username is empty
		if(empty(trim($_POST["username"]))) {
			$username_err = "Please enter username";
		}
		else {
			$username = trim($_POST["username"]);
		}

		// Check if password is empty
		if(empty(trim($_POST["password"]))) {
			$password_err = "Please enter password";
		}
		else {
			$password = trim($_POST["password"]);
		}

		// Validate credentials
		if(empty($username_err) && empty($password_err)) {
			// Prepare a select statement
			$sql = "SELECT student_id, student_user_name, student_password, level FROM student WHERE student_user_name = ?";

			if($stmt = mysqli_prepare($db, $sql)) {
				// Bind variables to the prepared statement as parameters
				mysqli_stmt_bind_param($stmt, "s", $param_username);

				// Set parameters
				$param_username = $username;

				// Attempt to execute the prepared statement
				if(mysqli_stmt_execute($stmt)) {
					// Store result
					mysqli_stmt_store_result($stmt);

					// Check if username exists, if yes then verify password
					if(mysqli_stmt_num_rows($stmt) == 1) {
						// Bind result variables
						mysqli_stmt_bind_result($stmt, $student_id, $username, $hashed_password, $level);
						if(mysqli_stmt_fetch($stmt)) {
							// Hash given password
							$password = hash('sha256', $password);
							
							// // password_verify($password, $hashed_password) not working
							// // as it uses password_hash() function to hash the password
							// // and I've used sha256 for hashing
							if($password === $hashed_password) {
								// Password is correct, so start a new session
								session_start();

								// Store data in session variables
								$_SESSION["loggedin"] = true;
								$_SESSION["student_id"] = $student_id;
								$_SESSION["student_user_name"] = $username;
								$_SESSION["level"] = $level;

								// Redirect user according to level
								if($_SESSION["level"] === "super")
									header("location: Question_Approval.php");

								if($_SESSION["level"] === "admin")
									header("location: Question_Sharing.php");

								if($_SESSION["level"] === "student")
									header("location: Home.php");
							}
							else {
								// Display an error message if password is not valid
								$uperror = "Invalid Username and/or Password";
							}
						}
					}
					else {
						// Display an error message if username does not exist
						$uperror = "Invalid Username and/or Password";
					}
				}
				else {
					echo '<script>alert("Oops! Something went wrong. Please try again later.")</script>';
				}

				// Close statement
				mysqli_stmt_close($stmt);
			}
		}

		// Close connection
		mysqli_close($db);
	}
?>

	<style>
		@import url('https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed');

		body {
			font-family: 'Barlow Semi Condensed', sans-serif;
			background: url(img/background.jpg) no-repeat center center fixed;
			background-size: cover;
		}
		.user-img {
			margin-top: -50px;
		}
		.user-img img {
			height: 100px;
			width: 100px;
		}
		.main-section {
			margin: 0 auto;
			margin-top: 150px;
			padding: 0;
		}
		.modal-content {
			background-color: #34495e;
			opacity: .90;
		}
		.user-name {
			margin: 10px 0;
		}
		.user-name h1 {
			font-size: 30px;
			color: white;
		}
		.form-input button {
			width: 100%;
			margin-bottom: 20px;
		}
		.btn-success {
			background-color: #2ecc71;
			border: 1px solid #2ecc71;
		}
		.btn-success:hover {
			background-color: #27ae60;
			border: 1px solid #27ae60;
		}
		.link-part {
			background-color: #ecf0f1;
			padding: 15px;
			border-radius: 0 0 5px 5px;
			border-top: 1px solid #c2c2c2;
		}
		.help-block {
			color: white;
		}
	</style>

	<body>
		<div class="modal-dialog text-center">
    		<div class="col-sm-8 main-section">
      			<div class="modal-content">
        			<div class="col-12 user-img">
          				<img src="img/logo.png">
        			</div>
        			<div class="col-12 user-name">
     					<h1>Welcome</h1>
        			</div>
		        	<div class="col-12 form-input">
		    			<form action="" method="post">
		      				<div class="form-group">
		        				<input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo $username; ?>">
		        				<span class="help-block"><?php echo $username_err; ?></span>
		      				</div>
		      				<div class="form-group">
		        				<input type="password" name="password" class="form-control" placeholder="Password">
		        				<span class="help-block"><?php echo $password_err; ?></span>
		      				</div>
		      				<span class="help-block"><?php echo $uperror; ?></span>
		      				<button type="submit" class="btn btn-success">Login</button>
		    			</form>
		        	</div>
      			</div>
    		</div>
  		</div>

		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	</body>
</html>