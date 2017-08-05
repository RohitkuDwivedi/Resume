<?php require_once 'header.php';?>
<?php
if(isset($_POST["email"])){
//    $con = mysqli_connect("localhost", "root", "") or exit("could not connect!");
//    mysqli_select_db($con, "cv_php");
    $email = filter_var($_POST["email"], FILTER_SANITIZE_MAGIC_QUOTES);
    $pass = filter_var($_POST["pass"], FILTER_SANITIZE_MAGIC_QUOTES);
    $query = "select * from cv_users 
    where user_name = '$email' 
    and pass = '$pass'";
    $r = mysqli_query($con, $query) or exit(mysqli_error($con));    
    if(mysqli_num_rows($r)>0){
       $row = mysqli_fetch_array($r); 
       $_SESSION["user_name"]=$row["user_name"];
       header("location:main.php");
      }else {
        $err="Incorrect User Name or Password!!";
    }
}
?>
<div class="row">    
    <div class="col-sm-10 col-sm-offset-1">    
<h1>Login</h1>
<form method="post"  class="form-horizontal">
  <div class="form-group  has-feedback">
      <input required type="text" class="form-control" id="email" name='email' placeholder="Email"/>
      <span class="glyphicon glyphicon-user form-control-feedback"></span>
  </div>
  <div class="form-group has-feedback">
      <input  required type="password" class="form-control" id="pass" name='pass' placeholder="Password"/>
      <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
  </div> 
  <div class="form-group"> 
      <button type="submit" class="btn btn-primary" style="background-color: #000066">Login</button>
      <button type="reset" class="btn btn-primary" style="background-color: #000066">Reset</button>
  </div>
  <div class="form-group"> 
      <a class="btn btn-primary" style="background-color: #000066" href="signup.php">Sign Up</a>
        </div>
    <div  class="form-group">
        <a style="color: blue;" href="forgot_pass.php">Forgot Password!</a>
    </div>
</form>
</div>
</div>
<?php require_once 'footer.php';?>


