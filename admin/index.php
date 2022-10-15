<?php
error_reporting(E_ALL);
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>لوحة التحكم</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
    <link rel="icon" type="image/png" href="dist/img/favicon.png" />

<link rel="stylesheet" href="dist/css/login.css">
<!-- jQuery 3 -->
<script src="dist/js/jquery.min.js"></script>
<!-- AdminScript App -->
<script src="dist/js/AdminScript.min.js"></script>
<!-- AdminScript for skins purposes -->
<script src="dist/js/skins.js"></script>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cairo:300,400,600,700,300italic,400italic,600italic">
<style>

.alert-danger {
    color: #a94442;
    background-color: #f2dede;
    border-color: #ebccd1;
        padding: 15px;
    margin-bottom: 20px;
    border: 1px solid transparent;
    border-radius: 4px;
}
}
</style>
</head>
<body>
	<div id="Authentication">

      <div class="Authleft">
				<h1>درة العقارية  </h1>
			<h2><img src="dist/img/cropped-new-logo.png.webp"/>  </h2>
  		</div>
  		<div class="Authright">
          	<h1>لوحة التحكم  </h1>
  			<form role="form" method="post" action="">
          <div class="alert alert-danger" id="error" style="margin-top: 10px; display: none">
            <strong>خطأ !</strong> بيانات الدخول غير صحيحة
        </div>
    			<div class="form-control">
            		<img src="dist/img/user.svg" class="iconinput">
  					<input type="text" placeholder="إسم المستخدم *" required autofocus name="login">
  				</div>
  				<div class="form-control">
           			<img src="dist/img/password.svg" class="iconinput">
  					<input type="password" placeholder="كلمة المرور *" required name="pwd">
  				</div>
  					<div class="form-control">
  					<input style="cursor: pointer" type="submit" value="تسجيل الدخول" name="submit">
  				</div>
  			</form>

  		</div>

  </div>
<?php
if (isset($_POST['submit'])){

include('../connect.php');
$wname=$_POST['login'];
$pass=$_POST['pwd'];
$password = md5($pass);
$sql="select * from users where username ='$wname' and password='$password' ";
$result=$conn->query($sql);
$count = $result->num_rows;
if ($count>0){

    $_SESSION['logged']=$wname;
  header('location:home.php');


}
else{
   ?>
   <script type="text/javascript">
      document.getElementById("error").style.display="block";
    </script>
    <?php
}}
?>

</body>
</html>







