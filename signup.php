<?php include_once './header.php'; ?>
<?php
if(isset($_POST["email"])){
    if($_POST["pass"]==$_POST["repass"]){
    $con = mysqli_connect("localhost", "root", "") or exit("could not connect!");
    mysqli_select_db($con, "cv_php");
    $email=$_POST["email"];
    $query = "select * from cv_users where user_name like '%$email%'";
    $r = mysqli_query($con, $query) or exit(mysqli_error($con));    
    $row = mysqli_fetch_array($r);
    
    if($row["user_name"]==$email){
            echo "<h3 style=\"color: red\">User already exists</h3>" ;
        }else{
                $query = "insert into cv_users (user_name, pass) values ('$_POST[email]', '$_POST[pass]')";
                mysqli_query($con, $query) or exit(mysqli_error($con));
                $_SESSION["user_name"]=$_POST["email"];
                 header("location:main.php");
              }
    }else {
            echo "<h3 style=\"color: red\">Both Password Dosen't match!!! Try again</h3>";
          }
}
?>
<form class="form-group container-fluid" method="post">
    <h1>Sign Up</h1>
    <form method="post"  class="form-horizontal">
  <div class="form-group  has-feedback">
      <input required type="email" class="form-control" id="email" name='email' placeholder="Email"/>
      <span class="glyphicon glyphicon-user form-control-feedback"></span>
  </div>
  <div class="form-group has-feedback">
      <input  required type="password" class="form-control" id="pass" name='pass' placeholder="Password"/>
      <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
  </div>
  <div class="form-group has-feedback">
      <input  required type="password" class="form-control" id="repass" name='repass' placeholder="Re-enter Password"/>
      <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
  </div>
  <div class="form-up"> 
      <button type="submit" class="btn btn-primary" style="background-color: #000066">Sign Up</button>
  </div>
  </form>

</form>
<?php include_once './footer.php'; ?>

