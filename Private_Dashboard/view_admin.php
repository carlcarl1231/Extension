<?php include 'header.php'; ?>
<div class="">
  
 <table id="dtable" class = "table table-striped">


          <thead>
              <th>Name</th>
              <th>Admin User</th>
              <th>Admin Password</th>
              <th>Status</th>
               <th>Action</th>
          </thead><br /><br />
          <tbody>
     <?php
         require_once("include/connection.php");

            $query="SELECT * FROM admin_login";
            $result=mysqli_query($conn,$query);
            while($rs=mysqli_fetch_array($result)){
              $id =  $rs['id'];
               $fname=$rs['name'];
               $admin=$rs['admin_user'];
               $pass=$rs['admin_password'];
               $status=$rs['admin_status'];
           
          ?>       
    
           <tr>
               <td width='10%'><?php echo $fname; ?></td>
               <td align='center'><?php echo $admin; ?></td>
               <td align='center' width="20%"><?php echo $pass; ?></td>
               <td align='center'><?php echo $status; ?></td>
               <td align='center'><a href="#modalRegisterFormsss?id=<?php echo $id;?>">
                <i class="fas fa-user-edit" data-toggle="modal" data-target="#modalRegisterFormsss"></i> </a> | <a href="delete_admin.php?id=<?php echo htmlentities($rs['id']); ?>"><i class='far fa-trash-alt'></i></a></td>
            
           </tr>
       
    <?php  } ?>
       </tbody>
   </table>

    <hr></div>
    <div class="footer-copyright py-3">
     <p>All right Reserved &copy; <?php echo date('Y');?> Developed By:Tundag & Franco</p>
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->

<!-- Card -->
  <!-- /Start your project here-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.0.min.js"></script>

  <script type="text/javascript" src="js/popper.min.js"></script>

  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <script type="text/javascript" src="js/mdb.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css"/>   
<script type="text/javascript" src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/1.0.3/css/dataTables.responsive.css">
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/responsive/1.0.3/js/dataTables.responsive.js"></script>

</body>
  <!--modal--->






<div class="modal fade" id="modalRegisterFormsss" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
    <?php 

require_once("include/connection.php");
  
$q = mysqli_query($conn,"select * from admin_login where id = '$id'") or die (mysqli_error($conn));
 $rs1 = mysqli_fetch_array($q);
 
               $id1=$rs1['id'];
               $fname1=$rs1['name'];
               $admin1=$rs1['admin_user'];
               $pass1=$rs1['admin_password'];
               $status=$rs1['admin_status'];
?>
  <div class="modal-dialog" role="document">
    <form method="POST">
    
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold"><i class="fas fa-user-edit"></i> Edit User</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body mx-3">
           <div class="md-form mb-5">
            <input type="hidden" class="form-control" name="id" value="<?php echo $id1;?>"><br>
        </div>
        <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="text" id="orangeForm-name" name="name" value="<?php echo $fname1;?>" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-name">Your name</label>
        </div>
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="email" id="orangeForm-email" name="admin_user" value="<?php echo $admin1;?>" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-email">Your email</label>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="password" id="orangeForm-pass" name="admin_password" value="<?php echo $pass1;?>" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-pass">Your password</label>
        </div>
          <div class="md-form mb-4">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="text" id="orangeForm-pass" name="status" value = "Employee" class="form-control validate" readonly="">
          <label data-error="wrong" data-success="right" for="orangeForm-pass">User Status</label>
        </div>
      
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-primary" name="edit2">UPDATE</button>
      </div>
    </div>
  </div>
</div>
</form>

  <!--modal--->
 <?php 

 require_once("include/connection.php");

  
 if(isset($_POST['edit2'])){
         $user_name = mysqli_real_escape_string($conn,$_POST['name']);
         $admin_user = mysqli_real_escape_string($conn,$_POST['admin_user']);
         $admin_password = password_hash($_POST['admin_password'], PASSWORD_DEFAULT, array('cost' => 12));  
       //  $user_status = mysqli_real_escape_string($conn,$_POST['status']);

     mysqli_query($conn,"UPDATE `admin_login` SET `name` = '$user_name', `admin_user` = '$admin_user', `admin_password` = '$admin_password' where id='$id'") or die (mysqli_error($conn));
  
  echo "<script type = 'text/javascript'>alert('Success Edit User/Employee!!!');document.location='view_admin.php'</script>";

}

?>
<?php include 'footer.php'; ?>

</html>
