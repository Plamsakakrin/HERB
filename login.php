<?php 
session_start();
        if(isset($_POST['Username'])){
				//connection
                  include("connection.php");
				//รับค่า user & password
                  $Username = $_POST['Username'];
                  $Password = $_POST['Password'];
				//query 
                  $sql="SELECT * FROM admin Where Userlogin='".$Username."' and Passlogin='".$Password."' ";
 
                  $result = mysqli_query($conn,$sql);
				
                  if(mysqli_num_rows($result)==1){
 
                      $row = mysqli_fetch_array($result);
 
                      $_SESSION["AdminID"] = $row["AdminID "];
                      $_SESSION["Userlogin"] = $row["Userlogin"];
                        // ใช้ตัวแปรในการเช็คว่า ID นี้ใช้งานอยู่รึป่าว
                      $_SESSION["Status"] = $row["Status"];
                
                      if($_SESSION["Status"]=="1"){ 
 
                        Header("Location: indexadmin.php");
                      }
                  if ($_SESSION["status"]=="member"){ 
 
                        Header("Location: member.php");
                      }
                  }else{
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";
 
                  }
        }else{
 
             Header("Location: search.php"); //user & password incorrect back to login again
 
        }
