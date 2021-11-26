<?php
session_start();

$con=mysqli_connect("localhost","root","","airline_reservation");
if(!isset($con))
{
    die("Database Not Found");
}


if(isset($_REQUEST["u_sub"]))
{
    
 $id=$_POST['pnr'];

 if($id!='')
 {
   $query=mysqli_query($con ,"select * from passengers where pnr='".$id."'");
   $res=mysqli_fetch_row($query);
   $query0=mysqli_query($con ,"select * from ticket_details where pnr='".$id."'");
   $res0=mysqli_fetch_row($query0);
   $query1=mysqli_query($con ,"select * from payment_details where pnr='".$id."'");
   $res1=mysqli_fetch_row($query1);

   if($res)
   {
    $_SESSION['user']=$id;
    header('location:pnrcheck.php');
   }
   else
   {
    
    echo '<script>';
    echo 'alert("Thông tin không chính xác")';
    echo '</script>';
   }
if($res0)
   {
    $_SESSION['user']=$id;
    header('location:pnrcheck.php');
   }
   else
   {
    
    echo '<script>';
    echo 'alert("Thông tin không chính xác")';
    echo '</script>';
   }


   
   if($res1)
   {
    $_SESSION['user']=$id;
    header('location:pnrcheck.php');
   }
   else
   {
    echo '<script>';
    echo 'alert("Thông tin không chính xác")';
    echo '</script>';
   }
  }
 else
 {
     echo '<script>';
    echo 'alert("Thông tin không chính xác")';
    echo '</script>';
 
 }
}
?>

<html>
	<head>
		<title>
			In Vé
		</title>
		<style>
			input[type=submit] {
				background-color: #030337;
				color: white;
    			border-radius: 4px;
    			/* padding: 7px 45px; */
    			
			}
		</style>
		<link rel="stylesheet" type="text/css" href="styles.css"></link>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	</head>
	<body style="background: url('images/shutterstock_390581569.jpg'); ">
        
		<img class="logo" src="images/my-logo.png"/> 
		<h1 id="title">
			Phòng vé Đà Lạt PV	</h1>
		<div>
		<div class="topnav">
			<div class="col-md-7">
			<a class="fa fa-home" aria-hidden="true" href="customer_homepage.php" style="background-color: #04AA6D;">Cá nhân</a>
			<a class="fa fa-home" aria-hidden="true" href="index.html">Khuyến mãi</a>
			<a class="fa fa-phone" aria-hidden="true" href="index.html">Liên hệ</a>
			<a class="fa fa-sign-out" aria-hidden="true" href="logout_handler.php"> Đăng xuất </a>
    		</div>
		</div>
        <div>
        <?php echo "<h3>Chào bạn " .$_SESSION['login_user'].". Vui lòng nhập mã PNR để in vé."; ?>
        </div>
        <form id="index" action="pnr.php" method="post">
            <div>
                <img class="logo-ima" src="images/my-logo.png" style="overflow: hidden; padding-left: 70px"/>
            </div>
            <div style="text-align: center">
                <input type="text" id="u_id" name="pnr" style="width:300px; margin-left: 66px; text-align: center; height: 30px" placeholder="Nhập mã PNR"><br>
                <input type="submit" id="u_sub" name="u_sub" value="IN" style="width:100px; margin-left: 70px;">
            </div>

            <!-- <div class="container-fluid">    
                <div class="row">
                  
                </div>    
             
        
                <div id="divtop">
                    
                        <br><br><br>
                            <div id="dmain"  > 
                               <img class="logo" src="images/my-logo.png" style="float: left"/> 
                            </div>
                            <div>
                            <br>
                                <input type="text" id="u_id" name="pnr" class="form-control" style="width:300px; margin-left: 66px; text-align: center" placeholder="Nhập mã PNR"><br>
                                <input type="submit" id="u_sub" name="u_sub" value="Print" class="toggle btn btn-primary" style="width:100px; margin-left: 70px;">
                                <button type="button" onclick="location.href = 'customer_homepage.php';" class="toggle btn btn-primary" style="width:100px; margin-left: 70px;">Trở về trang trước</button>
                            <br>
                            </div>
                </div>
            </div> -->
        </form>  
       </body>
</html>
