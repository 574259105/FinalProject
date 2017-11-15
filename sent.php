<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "carcare";

$UserID=$_POST['UserID'];
$Name=$_POST['Name'];
$UserName=$_POST['UserName'];
$Password=$_POST['Password'];
$Status=$_POST['Status'];
if (empty($UserID)){$UserID = date("dmYHis", strtotime('now')) ;} echo "UD".date("dmYHis", strtotime('now')) ;

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		 $conn -> exec("set names utf8");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO user_account (UserID,Name, UserName, Password,Status)
VALUES ('".$_POST["UserID"]."','".$_POST["Name"]."', '".$_POST["UserName"]."', '".$_POST["Password"]."','".$_POST["Status"]."')";

    // use exec() because no results are returned
    $conn->exec($sql);
   echo "<script type='text/javascript'>";
	echo "alert('Save Succesfuly');";
	echo "window.location ='index.html'; ";
	echo "</script>";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
	}

$conn = null;
?>

