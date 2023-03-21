<?php

require_once 'connection.php';
global $conn;


if ( isset( $_POST['register'] ) ) {
	$firstname = trim( $_POST['firstname'] );
	$address   = trim( $_POST['address'] );
	$email     = trim( $_POST['email'] );
	$mobile    = trim( $_POST['mobile'] );
	$gender    = trim( $_POST['gender'] );
	$subject   = trim( $_POST['subject'] );
	$password  = trim( $_POST['password'] );

	$insert_student_info = "INSERT INTO studentInfoTable (firstname, address,email,mobile,gender,subject,password ) VALUES ('$firstname','$address','$email','$mobile','$gender','$subject','$password')";

	if ( mysqli_query( $conn, $insert_student_info ) ) {
		echo 'ok';
	} else {
		echo "Error: " . $insert_student_info . "<br>" . $conn->error;
	}
}


?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">

</head>
<body>

<section class="vh-100 bg-image"

<div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                <div class="card" style="border-radius: 15px;">
                    <div class="card-body p-5">
                        <h2 class="text-uppercase text-center mb-5">Create an account</h2>

                        <form action="" method="POST" id="registration-form-data">

                            <div class="form-outline mb-4">
                                <input type="text" id="your-name" name="firstname" class="form-control form-control-lg" required/>
                                <label class="form-label" for="your-name">Your Name</label>
                            </div>

                            <div class="form-outline mb-4">
                                <input type="text" id="address" name="address" class="form-control form-control-lg" required/>
                                <label class="form-label" for="address">Address</label>
                            </div>

                            <div class="form-outline mb-4">
                                <input type="email" id="email" name="email" class="form-control form-control-lg" required/>
                                <label class="form-label" for="email">Your Email</label>
                            </div>

                            <div class="form-outline mb-4">
                                <input type="text" id="mobile" name="mobile" class="form-control form-control-lg" required/>
                                <label class="form-label" for="mobile">Mobile Number</label>
                            </div>


                            <div class="form-outline mb-4">
                                <input type="text" id="gender" name="gender" class="form-control form-control-lg" required/>
                                <label class="form-label" for="gender">Gender</label>
                            </div>

                            <div class="form-outline mb-4">
                                <input type="text" id="subject" name="subject" class="form-control form-control-lg" required/>
                                <label class="form-label" for="subject">Subject</label>
                            </div>

                            <div class="form-outline mb-4">
                                <input type="password" id="password" name="password" class="form-control form-control-lg" required/>
                                <label class="form-label" for="password">Password</label>
                            </div>

                            <div class="d-flex justify-content-center">
                                <button type="submit" name="register"
                                        class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register
                                </button>
                            </div>

                            <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="#!"
                                                                                                    class="fw-bold text-body"><u>Login here</u></a></p>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
></script>
</body>
</html>