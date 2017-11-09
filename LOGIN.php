<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-3.3.7.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap-3.3.7.js"></script>
<title>pj</title>
</head>
<style>
body, h1 {
	font-family: "Raleway", sans-serif
}
body, html {
	height: 100%
}
.bgimg {
	background-image: url("images/67.jpg");
	min-height: 100%;
	background-position: center;
	background-size: cover;
}
.btn-facebook {
	background: #3B5998;
}
.btn-facebook:link, .btn-facebook:visited {
	color: #fff;
}
.btn-facebook:active, .btn-facebook:hover {
	background: #263961;
	color: #fff;
}
</style>

<body>
<div class= "bgimg w3-display-container w3-animate-opacity w3-text-white">
  <div class="w3-display-topleft w3-padding-large w3-xlarge" style="font-family: B2 SIGN Big Match"> <i style="font-size:20px" class="fa">&#xf1b9;</i> &nbsp; ID คาร์แคร์ </div>
  <div class="w3-container">
    <div class="w3-card-4 w3-light-gray w3-display-middle" style="">
      <div class="w3-container w3-center" >
        <div class="logo" style="font-size: 36px; ">login</div>
        <hr class="w3-border-grey" style="width:100%">
        
        <br>
        <form class="text-center" style="align-content: center" method="POST" action="check_login.php"> 
          <div class="form-group"  >
            <input type="text" class="form-control" style="width:350px; " id="Username" name="Username" placeholder="Username">
            <br>
            <input type="password" class="form-control" style="width:350px"  id="Password" name="Password" placeholder="Password">
          </div>
          &nbsp;
          <div class="w3-section"> &nbsp;&nbsp; <input type = "submit" value = " LOGIN "/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="#" title="Facebook" class="btn btn-facebook btn-sm"><i class="fa fa-facebook fa-fw"></i> Facebook</a>
            <p style="color: black">or</p>
            <div class="form-group" align="center">
              <div style="border-top: 1px solid#888; padding-top:10px; font-size:85%; color: black" >Don't have an account! <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">&nbsp;&nbsp; <span class="glyphicon glyphicon-alert" ></span>Register here </a> </div>
            </div>
          </div>
        </form>
      </div>
    </div >
  </div>
</div>
</body>
<script type="text/javascript">

//function checkEmailLogin() {
		// var email = $("#email").val();
		// var pwd = $("#pwd").val();
		// if (email == "admin" && pwd == "1234") {

		// 	window.open('showAddService.html');
// 			javascript: window.close(this);
	// 	} else if(email == "user" && pwd == "1234"){
	// 		 window.open('ProFile.html');
	// 	}else{
	// 		alert("Email or Password error");
	// 	}
	// }

	// function register() {

	// 	 window.open('Register.html');
	// 	 window.close(this);

	//}

</script>
</body>
</html>
