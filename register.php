<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Untitled Document</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="http://fonts.googleapis.com/css?family=Lato:100italic,100,300italic,300,400italic,400,700italic,700,900italic,900" rel="stylesheet" type="text/css">
<style>
body{

font: 400 15px/1.8 Lato, sans-serif;
background: url(images/bk.jpg)  no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
	}
	  

	
.login-form {
	text-align: center;
	margin: 0 auto;
	margin-top: 20px;
	margin-bottom: 100px;
	max-width: 460px;
}
	.login-form > section {
		padding: 35px 35px 25px 35px;
		border-radius: 5px;
	}
	.login-form a {
		color: #fff;
	}
	.login-form img {
		display: block;
		margin: 0 auto;
		margin-bottom: 15px;
	}

form[role=login] {
	font: 14px/2.2em Lato, serif;
	color: #aaa;
	 background-color: black;
    border: 1px solid black;
    opacity: 0.9;
    filter: alpha(opacity=90); /* For IE8 and earlier */
	 box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

}	
	form[role=login] input,
	form[role=login] > button {
		font-size: 15px;
		padding: 10px 30px;
	}
	form[role=login] input {
		color: #777;
		background: #F7F7F7;
		border: none;
		height: 2.6em;
		padding: 20px 40px;
		border-radius: 3px;
	}
	form[role=login] > div {
		margin: 30px 0;
		position: relative; 
	}
	form[role=login] > button {
		margin-top: 15px;
		margin-bottom: 15px;
		background:#3B0809;
		border: #FDFDFD;
		border-radius: 10px;
		width: 200px;
		

	}
	
.form-control + .glyphicon {
	position: absolute;
	left: 18px;
	top: 5px;
	padding: 8px 0 0 17px;
	font-size: 15px;
	color: #505050;
}

</style>
</head>
<body>
<?php
if (empty($UserID)){$UserID = date("dmYHis", strtotime('now')) ;}
?>
<section class="container login-form" >
		<section>
<form method="post" action="sent.php" role="login">
<img src="images/np.png" alt="" width="127" height="92" class="img-responsive" />
 <label style="font-family: B2 SIGN Big Match; font-size: 18px; color: #FFFFFF;">R E G I S T E R
<br>
 ** <span style="color: #FFFFFF">กรุณากรอกข้อมูลให้ครบถ้วน</span></label>
<input type="hidden" name="UserID" value="<?php echo"UC".($UserID) ?>">
<div class="form-group"style="padding-left: 20px; padding-right: 20px" >
<input type="text" name="Name" required class="form-control" placeholder="Please Enter Name" />
<span class="glyphicon glyphicon-user"></span></div>
<div class="form-group"style="padding-left: 20px; padding-right: 20px" >
<input type="text" name="UserName" required class="form-control" placeholder="Please Enter Username" />
 <span class="glyphicon glyphicon-user"></span></div>
<div class="form-group"style="padding-left: 20px; padding-right: 20px" >
<input type="password" name="Password" required class="form-control" placeholder="Please Enter Password" />
 <span class="glyphicon glyphicon-lock"></span></div>	
  <div class="form-group" style="padding-left: 20px; padding-right: 20px">
<select class="form-control" id="Status" name="Status">
      <option selected="selected" disabled>--SELECT STATUS--</option>
    <option value="ADMIN">ADMIN</option>
   <option value="USER">USER</option>
  </select>         
  </div>
 <p align="center">
   <button type="submit" name="go" class="btn btn-success btn-block" style="border-radius:12px;width: 150px">Confirm</button>
 </p> 
 <br>
 </form>
		</section>
	</section>
</body>
</html>