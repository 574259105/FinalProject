<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "carcare";
 
   $txtName=$_POST['txtName'];
$txtPass=$_POST['txtPass'];
 try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	 	 $conn -> exec("set names utf8");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare('SELECT*FROM user_account WHERE UserName ="'.$_POST['txtName'] .'" AND Password= "'.$_POST['txtPass'].'" '); 
    $stmt->execute();
	 $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
	 if($stmt->fetchAll()){
     echo "<script type='text/javascript'>";
	echo "alert('Login Succesfuly');";
	echo "window.location ='HOME.html'; ";
	echo "</script>";
	 }else{
		 
		  echo "<script type='text/javascript'>";
	echo "alert('UserName or Password faild');";
	echo "window.location ='index.html'; ";
	echo "</script>";
	 }
	 
} 
catch(PDOException $e)
    {
  
}
$conn = null;
?>