<html>

<head>
	<title>Fly</title>
</head>

<body>


	<form method="post" >
  	Name: <input type="text" name="fname">
  	<input type="submit">
	</form>


<?php
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}


	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	    // collect value of input field
	    $name = $_POST['fname'];
	    if (empty($name)) {
	        echo "Name is empty";
	    } else {
	        echo $name;
	    }
	}


	$user = 'jshirley24';
	$pass = 'asdf';
	$db = 'fly';

	$db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");

	echo "It worked!";


	exit;
?>



</body>

</html>
