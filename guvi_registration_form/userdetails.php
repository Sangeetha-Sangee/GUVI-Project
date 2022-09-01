<?php 

include 'config.php';

error_reporting(0);

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$age = $_POST['age'];
	$dob = $_POST['dob'];
	$mobile = $_POST['mobile'];
		
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Details of the User</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Details of the user</p>
			<div class="input-group">
				<input type="text" placeholder="name" name="name" value="<?php echo $username; ?>" required>
			<div class="input-group">
				<input type="date" id="DOB" name="DOB">
            </div>
            <div class="input-group">
				<input type="int" placeholder="age" name="age" value="<?php echo $_POST['age']; ?>" required>
			</div>
            <div class="input-group">
				<input type="tel" placeholder="Mobile number" pattern="[0-9]{10}" value="<?php echo $_POST['Mobile number']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Submit</button>
			</div>
			<a href="logout.php">Logout</a>
		</form>
	</div>
</body>
</html>