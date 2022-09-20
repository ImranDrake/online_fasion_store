<!DOCTYPE html>
<html>
<head>
	<title>form_v</title>
</head>
<body>
	<?php
	$name= $email = $gender= $comment= $website= "";
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$name=test_input($_POST["name"]);
		$email=test_input($_POST["email"]);
		$website=test_input($_POST["website"]);
		$comment=test_input($_POST["comment"]);
		$gender=test_input($_POST["gender"]);
	}
	function test_input($data){
		$data=trim($data);
		$data=stripslashes($data);
		$data=htmlspecialchars($data);
		return $data;
	}
	?>
	<h2>PHP Form Validation Example</h2>
	<form action="funargmnts.php" method="POST">
		Name:<input type="text" name="name">
		<br><br>
		E-mail: <input type="text" name="email">
		<br><br>
		Website: <input type="text" name="website">
		<br><br>
		Comment: <textarea name="comment" rows="5" cols="45"></textarea>
		<br><br>
		Gender:
		<input type="radio" name="gender" value="male">Male
		<input type="radio" name="gender" value="female">Female
		<input type="radio" name="gender" value="others">Others
		<br><br>
		<input type="submit" name="submit" value="submit">
	</form>

</body>
</html>