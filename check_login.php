<?php 
session_start();
        if(isset($_REQUEST['Username'])){
				//connection
                  include("connection.php");
				//รับค่า user & password
                  $Username = $_REQUEST['Username'];
                  $Password = ($_REQUEST['Password']);
				//query 
                  $sql="SELECT * FROM user_account Where Username='".$Username."' and Password='".$Password."' ";

                  $result = mysqli_query($con,$sql);
				
                  if(mysqli_num_rows($result)==1){

                      $row = mysqli_fetch_array($result);

                      $_SESSION["UserID"] = $row["UserID"];
                      $_SESSION["User"] = $row["F_name"]." ".$row["L_name"];
                      $_SESSION["Sex"] = $row["Gender"];
                      $_SESSION["tel"] = $row["Tel"];
                      $_SESSION["Profile_BLOBs"] = $row["Profile_BLOBs"];
                      $_SESSION["Status"] = $row["Status"];
                      

                      if($_SESSION["Status"]=="ADMIN"){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php

                        Header("Location: HOME.php");

                      }

                      if ($_SESSION["Status"]=="USER"){  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php

                        Header("Location: user_page.php");

                      }

                  }else{
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";

                  }

        }else{


             Header("Location: login.php"); //user & password incorrect back to login again

        }
?>