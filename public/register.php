<?php 
require '../private/config/Database.php';
require '../private/system/Register.php';
require '../private/system/Login.php';

// Set registration parameters
$registrant = new Register();
$output = $registrant->postRegister();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <div class="container" id="splash">

        <form action="register.php" method="post" class="form-signin" >
            <h2 class="form-signin-heading">Sign up here </h2>
            <div class="form-group"> 
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email address" required autofocus>
            </div>
          <div class="form-group"> 
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required>
            <label for="inputPasswordVerify" class="sr-only">Verify Password</label>
            <input type="password" id="inputPasswordVerify" name="inputPasswordVerify" class="form-control" placeholder="Verify Password" required>
            </div> 
            <div class="form-group"> 
                <label for="inputHeadline" class="sr-only">Headline</label>
                <input type="text" id="inputHeadline" name="inputHeadline" class="form-control" placeholder="Headline" required autofocus>
            </div>
            <div class="form-group"> 
            	<label for="inputBio" class="sr-only">Bio</label>
            	<input type="text" id="inputBio" name="inputBio" class="form-control" placeholder="Enter bio" required autofocus>
            </div>
            
          <button id="registerButton" class="btn btn-lg btn-success btn-block" type="submit">Register</button>
            <p class="small"><input type="checkbox" checked="checked"><span>By submitting this form, I consent to be contacted by telephone, on my mobile device (including sms and mms), and email, even if the phone number I enter on this form is on a state, national or corporate do not call list. I am over 18 years of age and agree to the privacy policy and terms of use.</span></p>

      </form>    
    </div> <!-- /container -->
    &nbsp;
    <div id="outputPhp" class="container"> <!-- container -->
        <h4>PHP 7.0 Output:</h4>
        <p class="small">
        <?php         
			if ( $connect = new Database() ) {
				$connect->db_connect();
				echo 'Instantiate new database connection: Sucessfully connected<br>';
				$tabledata = $connect->get_all_users("Users");
			}
			?>
                <table class="table table-condensed">
                    <thead>
                        <tr>
                            <th>Count</th>
                            <th>User ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Encrypted Password</th>
                            <th>Photo</th>
                            <th>UID</th>
                            <th>Date Registered</th>
                            <th>Date Logged In</th>
                            <th>Date Modified</th>
                            <th>Headline</th>
                            <th>Bio</th>
                            <th>IP</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php echo $tabledata; ?>
                    </tbody>
                </table>
        </p>
    </div> <!-- /container -->
    &nbsp;
    <div id="outputJQuery" class="container"> <!-- container -->
        <h4>JavaScript Output:</h4>
        <div id="out"></div>
    </div> <!-- /container -->
    <!-- Enable JQuery 2.X -->
    <script src="http://code.jquery.com/jquery-2.2.3.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <!-- Customized JavaScript Applications -->
    <script src="js/custom.js"></script>
</body>
</html>