<link rel="stylesheet" href="vendor/bs/css/bootstrap.min.css">
<script src="vendor/jquery-3.1.0.min.js"></script>
<script src="vendor/bs/js/bootstrap.min.js"></script>
<script src="lib/angular/angular.min.js"></script>
<?php include_once './include/myfun.php';
 include_once './include/my_mail.php';
function err_hand($eno, $emsg){    
}
set_error_handler("err_hand", E_ALL);
session_start();
$con = mysqli_connect("localhost", "root", "") or exit("could not connect!");
    mysqli_select_db($con, "cv_php");
    $query= "select count(*) from cv_users";
    $r = mysqli_query($con, $query) or exit(mysqli_error($con));
    $row = mysqli_fetch_array($r);
    $row[count];
?>

<style>
    .btnpos{
/*       position: absolute;
    left: 500px;
    top: 300px;*/
        background-color: #006699;
        border-color: #1b6d85;
        color: white;
        margin-top: 8px;
    }
    .kk{
        background-color: #709f49;
    border-color: #709f49;
    color: white;
            
    }
        body{
         background-color: #dfeed8  ;
    }
    .back{
        background-color: #101010;
        color:white;
        }
    .header{
        background-color:#a0cf79;
        font-family: sans-serif;   
        
    }
</style> 
<!--Database connection-->
<!-- Top resume Image -->
<img class="img-responsive" src="image/header.png">
<!--Navigation Bar -->
<div>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nb">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
        <a class="navbar-brand" href="main.php">CV-Maker</a>
        <?php 
if(!isset($_SESSION["user_name"]))
    {$loc="createnew.php";}
 else{
    $loc="createnewlogin.php";
    }
?>
<a class=" btn btnpos kk " href="<?=$loc?>"  >Create Resume Now </a>
    </div>
    <div class="collapse navbar-collapse" id="nb">
      <ul class="nav navbar-nav navbar-right">
          <li><a href="main.php">Home </a></li>
        <li><a href="tips.php">Resume Tips</a></li>
        <li><a href="query.php">Ask Query</a></li>
        <?php
                session_start();
               if(isset($_SESSION["user_name"])){
          ?>
        <li><a href="sendcv.php">H.R.s</a></li>   
          <?php
          }?>
        <ul class="nav navbar-nav navbar-right">
                <?php
                session_start();
               if(isset($_SESSION["user_name"])){
          ?>
               <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" ><?=$_SESSION["user_name"]?> <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="logout.php">Logout</a></li>
              <li><a href="chpass.php">Change Password</a></li>
            </ul>
          </li>
          <?php
          }
          else {
              echo "<li><a href='login.php'>Login</a></li>";              
          }
          ?>      
      </ul>
      </ul>
        
    </div>
  </div>
</nav>
</div>

<!-- encloses main body in container fluid-->
<div class="container-fluid" >
    