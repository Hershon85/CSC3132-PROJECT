<?php
	require_once 'dbconf.php';
	function AddData($connect,$fname,$lname,$phone,$role,$email,$password){
		try {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
			$sql = "INSERT INTO user (fname,lname,phone,role,email,password)
			VALUES('$fname','$lname','$phone','$role','$email','$hashed_password')";
			$result = mysqli_query($connect,$sql);
			if ($result) {
				//echo "New student record created sucessfully";
			} else {
				die("Error ".mysqli_error($connect));
			}
            header('Location: ../index.html');
            exit;
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
	
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $phone=$_POST['phone'];
		$role=$_POST['role'];
        $email=$_POST['email'];
        $password=$_POST['password'];

		AddData($connect,$fname,$lname,$phone,$role,$email,$password);
	}

	?>