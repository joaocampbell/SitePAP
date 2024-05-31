<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
    $comentario = $_POST['comentario'];

	// Database connection
	$conn = new mysqli('localhost','root','','pap');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into desenvolvedores(name, email, comentario) 
            values(?, ?, ?)");
		$stmt->bind_param("sss", $name, $email, $comentario);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
    header("Location:../contactoJP.html");
?>