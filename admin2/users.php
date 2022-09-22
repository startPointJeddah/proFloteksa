<?php
     error_reporting(0);
  include('../connect.php');
 session_start();
    ?>
<?php if( !isset($_SESSION['logged']) || !$_SESSION['logged']  || empty($_SESSION['logged'])  ){
	header("Location:index.php");
} 
?>

<?php include ('file/header.php');?>
    <title>مستخدمى لوحة التحكم</title>        
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1> مستخدمى لوحة التحكم
	  </h1>
	  <ol class="breadcrumb" >
        <li><a href="home.php"><i class="fa fa-dashboard"></i> الرئيسية </a></li>
        <li class="active">مستخدمى لوحة التحكم</li>
      </ol>	
    </section>
    
    <!-- Main content -->
    <section class="content"> 
      <!-- Main row -->
      <div class="row"> 
        
        <!-- Section General -->
        <section class="col-lg-12 connectedSortable">
		


		<div class="box box-primary">
            <div class="box-header  with-border">
              <h3 class="box-title">مستخدمى لوحة التحكم</h3>
							 <div class="alert alert-success" id="successadd" style="margin-top: 10px; display: none">
          <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>نجاح العملية !</strong> تم الاضافة بنجاح
        </div>
         <div class="alert alert-danger" id="successcancel" style="margin-top: 10px; display: none">
           <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>نجاح العملية !</strong> تم الحذف بنجاح
        </div>
         <div class="alert alert-info" id="successupdate" style="margin-top: 10px; display: none">
           <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>نجاح العملية !</strong> تم التعديل بنجاح
        </div>
         
    <div class="alert alert-danger" id="error" style="margin-top: 10px; display: none">
      <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>خطأ !</strong> كلمتي المرور غير متطابقتين
        </div>
     <div class="alert alert-danger" id="errordoubl" style="margin-top: 10px; display: none">
       <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>خطأ !</strong>  اسم المستخدم موجود مسبقا
        </div>
                <div class="box-header with-border">
       <div class="box-header with-border">
                    <form action="products.php" method="get">

                        <div class="row">
                            <div class="col-md-4">
                             <a data-toggle="modal"
                               data-target="#add" class="btn btn-primary"><i class="fa fa-plus"></i>  اضف</a>
                                                        </div>
                        </div>
                    </form><!-- end of form -->

                </div><!-- end of box header -->

			  <div class="box-tools pull-left">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              </div>
            </div>
            <div class="box-body table-responsive">

		<table id="TableForm" class="table table-bordered table-striped">
            <thead>
                <tr>
					<th class="">#</th>
     <th>الاسم الكامل</th>
     	<th>اسم الدخول</th>				
					<th>تعديل</th>
					<th>حذف</th>
                </tr>
            </thead>
			<tbody>
       <?php
			 $count =0;
			$sql="select * from users  ";
      $result=$conn->query($sql);
			while($row = $result->fetch_assoc()) {
				$count = $count+1;
			?>
            <tr>
					<th class=""><?php echo $count ?></th>
    
                    <td>
                    <?php echo $row['name']; ?>
                    </td>
          <td>
           <?php echo $row['username']; ?>
         </td>

				<td class="text-center">
						<a title="تعديل"  href='#' class="btn btn-info" data-toggle="modal" data-target="#edit<?php echo $row["id"]; ?>">
						<i class="fa fa-edit"></i></span> تعديل</a>
					</td>
                   
					<td class="text-center">
       <?php if ($row['type'] == 1 ) :?>
						<a title="حذف" class="btn btn-danger" data-toggle='modal' data-target='#confirm-delete<?php echo $row["id"]; ?>' href='#'>
						<i class="fa fa-trash-o"></i> حذف</a>
      <?php endif ?>
      <br>
                    </td>
            </tr>
						
		<!-- اضافة -->
        <div class="modal fade" id="edit<?php echo $row["id"]; ?>"  role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">تعديل</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="" method="post" >
                <input type="hidden" name="id" value="<?php echo $row["id"]; ?>"   class="form-control" >

                        <div class="modal-body">
                            <p>تعديل ؟</p>
                            
                            <br>
                             
                            <div class="col-md-12">
                                <div class="form-group">
                             <label>* الاسم الكامل</label>
                               <input type="text" class="form-control" name="name"  value="<?php echo $row["name"]; ?>" required>
                                </div></div>
                                 <div class="col-md-12">
                                <div class="form-group">
                             <label>* البريد الالكتروني</label>
                               <input type="email" class="form-control" name="mail" value="<?php echo $row["mail"]; ?>" required>
                                </div></div>
                                <!-- /.form-group -->
                                <div class="col-md-12">
                               <div class="form-group">
                               <label>إسم الدخول</label>
                               <input type="text" name="username" value="<?php echo $row["username"]; ?>"   class="form-control" required>
                               </div></div>
                               <!-- /.form-group -->
                               <div class="col-md-6">
                               <div class="form-group">
                               <label>كلمة المرور </label>
                               <input  type="text" name="pw"  value='' class="form-control"  required>
                               </div></div>
                               <div class="col-md-6">
                               <div class="form-group">
                               <label>تأكيد كلمة المرور</label>
                               <input type="text" name="pwd"  value='' class="form-control" required>
                               </div></div>
                               <!-- /.form-group -->
                                

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">تراجع</button>
                            <button type="submit" name="update" class="btn btn-primary">حفظ</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
			
				<!--حذف-->
				<div class="modal fade" id="confirm-delete<?php echo $row["id"]; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">تأكيد الحذف</h4>
					<form action="" method="post">
				 <input type="hidden" name="id" id="id" value="<?php echo $row["id"]; ?>">
      </div>
		
      <div class="modal-body">
        <p>أنت على وشك حذف بيانات, هذا الإجراء لا رجعة فيه. هل تريد تفعيله؟</p>
        <p class="debug-url"></p>
				 <div class="col-md-12">
      <input type="text" class="form-control" value="<?php echo $row["name"]; ?>" readonly>
				 </div><br /><br />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">تراجع</button>
				 <button type="submit" name="delete" class="btn btn-danger danger">تأكيد</button>
	  </div>
    </div>
		 </form>
  </div>
</div>  
           <?php } ?>
		</tbody>
			</table>

				<!-- اضافة -->
        <div class="modal fade" id="add"  role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">إضافة</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="" method="post" >
                       
                        <div class="modal-body">
                            <p>اضافة  جديد ؟</p>
                            
                            <br>
                           
                            <div class="col-md-12">
                                <div class="form-group">
                             <label>* الاسم الكامل</label>
                               <input type="text" class="form-control" name="name"  value="" required>
                                </div></div>
                             <div class="col-md-12">
                                <div class="form-group">
                             <label>* البريد الالكتروني</label>
                               <input type="email" class="form-control" name="mail"  value="" required>
                                </div></div>
                               
                                <!-- /.form-group -->
                                <div class="col-md-12">
                               <div class="form-group">
                               <label>إسم الدخول</label>
                               <input type="text" name="username"   class="form-control" required>
                               </div></div>
                               <!-- /.form-group -->
                               <div class="col-md-6">
                               <div class="form-group">
                               <label>كلمة المرور </label>
                               <input  type="text" name="pw"  value='' class="form-control"  required>
                               </div></div>
                               <div class="col-md-6">
                               <div class="form-group">
                               <label>تأكيد كلمة المرور</label>
                               <input type="text" name="pwd"  value='' class="form-control" required>
                               </div></div>
                               <!-- /.form-group -->
                                

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">تراجع</button>
                            <button type="submit" name="add" class="btn btn-primary">حفظ</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
        
		</div>
		</div>
		
	<?php
if(isset($_POST["add"]))
{
$username=htmlspecialchars($_POST['username']);
$name=htmlspecialchars($_POST['name']);
$password=htmlspecialchars($_POST['pw']);
$mail=htmlspecialchars($_POST['mail']);

$password= md5($password);
$password_confirmation=htmlspecialchars($_POST['pwd']);
$password_confirmation= md5($password_confirmation);
if ($password!==$password_confirmation){
 ?>
   <script type="text/javascript">
      document.getElementById("error").style.display="block";
    </script>
    <?php
}else{
$sql1="select * from users where username = '$username' ";
$result1=$conn->query($sql1);
$count1 = $result1->num_rows;
if ($count1>0){
    ?>
<script type="text/javascript">
      document.getElementById("errordoubl").style.display="block";
         setTimeout(function(){
             window.location.href=window.location.href;
               }, 3000);
    </script>
    <?php
   }else{
$sql="insert into users (username,name,password,mail) values ('$username','$name','$password','$mail')";
$result=$conn->query($sql);
if ($result == true){
 ?>
  <script type="text/javascript">
      document.getElementById("successadd").style.display="block";
         setTimeout(function(){
             window.location.href=window.location.href;
               }, 3000);
    </script>
  <?php
}
}}}
?>


<?php
if(isset($_POST["update"]))
{
$username=htmlspecialchars($_POST['username']);
$name=htmlspecialchars($_POST['name']);
$password=htmlspecialchars($_POST['pw']);
$ids=htmlspecialchars($_POST['id']);
$mail=htmlspecialchars($_POST['mail']);

$password= md5($password);
$password_confirmation=htmlspecialchars($_POST['pwd']);
$password_confirmation= md5($password_confirmation);
if ($password!==$password_confirmation){
 ?>
   <script type="text/javascript">
      document.getElementById("error").style.display="block";
    </script>
    <?php
}else{
$sql1="select * from users where username = '$username' and id != '$ids' ";
$result1=$conn->query($sql1);
$count1 = $result1->num_rows;
if ($count1 > 0){
    ?>
<script type="text/javascript">
      document.getElementById("errordoubl").style.display="block";
         setTimeout(function(){
             window.location.href=window.location.href;
               }, 3000);
    </script>
    <?php
   }else{
$sql="update users set
username='$username',
name = '$name',
password='$password',
mail = '$mail'
where id = '$ids'
";
$result=$conn->query($sql);
if ($result == true){
 ?>
  <script type="text/javascript">
      document.getElementById("successadd").style.display="block";
         setTimeout(function(){
             window.location.href=window.location.href;
               }, 3000);
    </script>
  <?php
}
}}}
?>

		

<?php
error_reporting(0);
if(isset($_POST["delete"]))
{
  
  $sql="delete  from users  where id ='$_POST[id]'";
$result=$conn->query($sql);
 if ($result == true){    
?>
   <script type="text/javascript">
      document.getElementById("successcancel").style.display="block";
         setTimeout(function(){
             window.location.href=window.location.href;
               }, 3000);
    </script>
    <?php
 }}
?>
		
		
	</body>
</html>



<?php include ('file/footer.php');?>
