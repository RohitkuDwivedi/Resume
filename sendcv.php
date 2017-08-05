<?php include_once './header.php'; 
if(isset($_FILES["at1"]) && empty($_FILES["at1"]["name"])!=true){
$con = mysqli_connect("localhost", "root","") or exit("could not connect!");
mysqli_select_db($con, "cv_php");
$query = "select * from cv_users where user_name = '$_SESSION[user_name]'";
$r = mysqli_query($con, $query) or exit(mysqli_error($con));    
$row = mysqli_fetch_array($r);
$filename=$_FILES["at1"]["name"];
$ext = end(explode('.', $filename));
$ext = substr(strrchr($filename, '.'), 1);
$ext = substr($filename, strrpos($filename, '.') + 1);
$ext = preg_replace('/^.*\.([^.]+)$/D', '$1', $filename);
$exts = split("[/\\.]", $filename);
$n    = count($exts)-1;
$ext  = $exts[$n];

move_uploaded_file($_FILES["at1"]["tmp_name"], "uploads/$row[id].$ext");
$to=$_POST["company"];
$sub="cv form CV_MAKERS";
$msg="plz repond as to the mail-id in cv";

if($_POST["company"]=="INTEL"){
    $to="11npwhrindia@intel.com";
}else if($_POST["company"]=="ORACLE"){
    $to="11naveen.vemula@oracle.com";
}else if($_POST["company"]=="Infosys"){
    $to="11bangalore.hrd@inf.com";
}else if($_POST["company"]=="IBM"){
    $to="11osuar@in.ibm.com";
}else if($_POST["company"]=="Wipro"){
    $to="11careers@wipro.com";
}else if($_POST["company"]=="HP"){
    $to="11resumes@india.hp.com";
}
$atch="uploads/$row[id].$ext";
mail_it($to, $sub, $msg, $atch);
unlink("uploads/$row[id].$ext");
}
?>
<div class="row">
    </div>
    <div class="col-sm-10 col-sm-offset-1">    
    <h1>Directly to HR</h1>    
<form method="post" enctype="multipart/form-data" class="form-horizontal">
    <label for="company">Company:</label><br>
    <select required="" name="company" style="width: 10%; height: 4%">
        <option>INTEL</option>
        <option>ORACLE</option>
        <option>Infosys</option>
        <option>IBM</option>
        <option>Wipro</option>
        <option>HP</option>
    </select>
      <br><label for="at1">CV:</label>
      <input required="" class="form-control" style="" type="file" name="at1"/>
     <div  class="form-group">
       <h4 style="color: red;"><?php echo $err;?></h4>
    </div>    
  <div class="form-group"> 
      <button type="submit" class="kk btn btn-primary btn-lg" >Send</button>
  </div>
  <div class="form-group"> 
      <a class="kk btn btn-primary btn-lg" href="sendcv.php">Reset</a>
  </div>    
</form>
    </div>
         
<?php include_once './footer.php';?>
      