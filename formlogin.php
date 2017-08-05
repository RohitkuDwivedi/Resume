<?php session_start();
if(!isset($_SESSION["user_name"])){
 echo "<h2 style=\"color: red\">Please Login to continue with services!!!</h2>";
} 
if(isset($_FILES["at1"]) && empty($_FILES["at1"]["name"])!=true){
    $con = mysqli_connect("localhost", "root","") or exit("could not connect!");
mysqli_select_db($con, "cv_php");
$query = "select * from cv_users where user_name = '$_SESSION[user_name]'";
$r = mysqli_query($con, $query) or exit(mysqli_error($con));    
$row = mysqli_fetch_array($r);
   //delete pre existing photo for the id
    foreach(glob("uploads/$row[id].*") as $file)
    if(is_file($file))
        @unlink($file);
    //now add new photo
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
}
$con = mysqli_connect("localhost", "root","") or exit("could not connect!");
mysqli_select_db($con, "cv_php");
$query = "select * from cv_users where user_name = '$_SESSION[user_name]'";
$r = mysqli_query($con, $query) or exit(mysqli_error($con));    
$row = mysqli_fetch_array($r);
if(isset($_POST["uname"])){
    $con = mysqli_connect("localhost", "root", "") or exit("could not connect!");
    mysqli_select_db($con, "cv_php");
    $query = "update cv_users set  "
        . "phno   =  '$_POST[pn]', "
        . "uname =  '$_POST[uname]', "
        . " email_id =  '$_POST[email]', "
        . " fname =  '$_POST[fname]' , "
        . " adress =  '$_POST[add]', "
        . " website = '$_POST[website]', "
        . " dob = '$_POST[dob]', "
        . " language =  '$_POST[lang]', "
        . " ssc_per =  '$_POST[ssc_percentage]' , "
        . " ssc_board =  '$_POST[ssc_board]', "
        . " ssc_institute =  '$_POST[ssc_inst]', "
        . " ssc_year =  '$_POST[ssc_year]', "
        . " hsc_per =  '$_POST[hsc_percentage]', "
        . " hsc_board =  '$_POST[hsc_board]', "
        . " hsc_institute =  '$_POST[hsc_inst]', "
        . " hsc_year =  '$_POST[hsc_year]', "
        . " b_per =  '$_POST[b_percentage]' , "
        . " b_board =  '$_POST[b_board]', "
        . " b_institute =  '$_POST[b_inst]', "
        . " b_year =  '$_POST[b_year]', "
        . " b_branch =  '$_POST[b_branch]', "
        . " m_per =  '$_POST[m_percentage]', "
        . " m_board =  '$_POST[m_board]', "
        . " m_branch =  '$_POST[m_branch]', "
        . " m_institute =  '$_POST[m_inst]', "
        . " m_year =  '$_POST[m_year]', "
        . " techskills =  '$_POST[tech]', "
        . " p1_topic =  '$_POST[p1_topic]', "
        . " p1_desc =  '$_POST[p1_desc]', "
        . " p1_techused =  '$_POST[p1_tec]', "
        . " p2_topic =  '$_POST[p2_topic]', "
        . " p2_desc =  '$_POST[p2_desc]', "
        . " p2_techused =  '$_POST[p2_tec]', "
        . " workshop  =  '$_POST[workshops]', "
        . " hobbies  =  '$_POST[hobbies]', "
        . " achivements  =  '$_POST[achivements]', "
        . " c_obj  =  '$_POST[c_obj]' "
        . "where id = '$row[id]'";
        
        mysqli_query($con, $query) or exit(mysqli_error($con));
        header("location:createnewlogin.php");
        
}?>
<form method="POST" enctype="multipart/form-data" >

<h1> Enter the Details:</h1>
<h2>Personal Details</h2>
<div class="col-sm-12">
               <div class="col-sm-6">
                   <lable>Name </lable><br><input style="width: 70%" type="text" value="<?=$row["uname"]?>" name="uname"/>
                    </div>
    <div class="col-sm-6">
      <label>C.V.</label>
      <?php
             $temp=glob($log_directory."uploads/$row[id].*");
             $src=$temp[0];
             
            
             ?>
      <input style="width: 70%" type="file" name="at1" value="<?=$src?>"/>
    </div>
               <div class="col-sm-6">
                   <lable>Email </lable><br><input style="width: 70%" type="email" value="<?=$row["email_id"]?>" name="email"/>
               </div> 
               <div class="col-sm-6">
                    <lable>Phone No </lable><br><input style="width: 70%" type="number" value="<?=$row["phno"]?>" name="pn"/> 
                    
               </div>
                <div class="col-sm-6">
                    <lable>Web site</lable><br><input style="width: 70%" type="url" value="<?=$row["website"]?>" name="website"/>    
                </div>
                <div class="col-sm-6">
                   <lable>Father's Name </lable><br><input style="width: 70%" type="text" value="<?=$row["fname"]?>" name="fname"/>
                    </div>
               <div class="col-sm-6">
                   <lable>Address </lable><br><input style="width: 70%" type="text" value="<?=$row["adress"]?>" name="add"/>
                    </div>
               <div class="col-sm-6">
                   <lable>Date of Birth </lable><br><input style="width: 70%" type="date" value="<?=$row["dob"]?>" name="dob"/>
                    </div>
               <div class="col-sm-6">
                   <lable>Languages Known </lable><br><input style="width: 70%" type="text" value="<?=$row["language"]?>" name="lang"/>
                    </div>
               
</div>
<br><br><br><br><br><br><br><br><br><br>
<!--Academic details-->
<h2>Academic details</h2>
<div class="col-sm-3 ">
    <h3 class="text-left container-fluid"> S.S.C</h3>
               <div class="col-sm-12">
                   <lable>Percentage </lable><br><input type="number" style="width: 175px" step="0.01" min="0" max="100" value="<?=$row["ssc_per"]?>" name="ssc_percentage" />
               </div> 
                <div class="col-sm-12">
                     <lable>Board/University </lable><br><input type="text" value="<?=$row["ssc_board"]?>" name="ssc_board" />
                </div>
                <div class="col-sm-12">
                     <lable>Institute Name </lable><br><input type="text" value="<?=$row["ssc_institute"]?>" name="ssc_inst" />
                </div>
                <div class="col-sm-12">
                    <lable>Year </lable><br><input type="number" value="<?=$row["ssc_year"]?>" name="ssc_year" />    
                </div>
</div>
<div class="col-sm-3">
    <h3 class="text-left container-fluid"> H.S.C</h3>

               <div class="col-sm-12">
                   <lable>Percentage </lable><br><input type="number" style="width: 175px" step="0.01" min="0" max="100" value="<?=$row["hsc_per"]?>" name="hsc_percentage" />
               </div> 
                <div class="col-sm-12">
                     <lable>Board/University </lable><br><input type="text" value="<?=$row["hsc_board"]?>" name="hsc_board"/>
                </div>
                <div class="col-sm-12">
                     <lable>Institute Name </lable><br><input type="text" value="<?=$row["hsc_institute"]?>" name="hsc_inst" />
                </div>
                <div class="col-sm-12">
                    <lable>Year </lable><br><input type="number" value="<?=$row["hsc_year"]?>" name="hsc_year"/>    
                </div>
           </div>
<div class="col-sm-3">
 <h3 class="text-left container-fluid"> Bachelor</h3>
               <div class="col-sm-12">
                   <lable>Percentage </lable><br><input type="number" style="width: 175px" step="0.01" min="0" max="100" value="<?=$row["b_per"]?>" name="b_percentage"/>
               </div> 
                <div class="col-sm-12">
                     <lable>Board/University </lable><br><input type="text" value="<?=$row["b_board"]?>" name="b_board"/>
                </div>
                <div class="col-sm-12">
                     <lable>Institute Name </lable><br><input type="text" value="<?=$row["b_institute"]?>" name="b_inst" />
                </div>
                
                <div class="col-sm-12">
                    <lable>Year </lable><br><input type="number" value="<?=$row["b_year"]?>" name="b_year" />    
                </div>
                <div class="col-sm-12">
                    <lable>Branch </lable><br><input type="text" value="<?=$row["b_branch"]?>" name="b_branch" />    
                </div>
</div>
<div class="col-sm-3">
    <h3 class="text-left container-fluid"> Masters</h3>

               <div class="col-sm-12">
                   <lable>Percentage </lable><br><input type="number" style="width: 175px" step="0.01" min="0" max="100" value="<?=$row["m_per"]?>" name="m_percentage"/>
               </div> 
                <div class="col-sm-12">
                     <lable>Board/University </lable><br><input type="text" value="<?=$row["m_board"]?>" name="m_board"/>
                </div>
                <div class="col-sm-12">
                     <lable>Institute Name </lable><br><input type="text" value="<?=$row["m_institute"]?>" name="m_inst" />
                </div>
                
                <div class="col-sm-12">
                    <lable>Year </lable><br><input type="number" value="<?=$row["m_year"]?>" name="m_year"/>    
                </div>
                <div class="col-sm-12">
                    <lable>Branch </lable><br><input type="text" value="<?=$row["m_branch"]?>" name="m_branch" />    
                </div>
           </div>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<h2>Technical skills</h2>
<div class="col-sm-12">
    <div class="col-sm-12">
            <textarea style="height: 90px;width: 100%" class="col-sm-4" name="tech"><?=$row["techskills"]?></textarea>
    </div>
</div>
<br><br><br><br><br>
<h2>Projects</h2>
<div class="col-sm-12">
<div class="col-sm-12">
<div class="row">
<div class="row">
<div class="col-sm-4">
    <lable>Topic </lable><br><input style="width: 80%" type="text" value="<?=$row["p1_topic"]?>" name="p1_topic" />
</div>
<div class="col-sm-4">
    
    <lable>Description </lable><br><textarea style="width: 100%" name="p1_desc"><?=$row["p1_desc"]?></textarea>
</div>    
<div class="col-sm-4">
    <lable>Technology Used</lable><br><input style="width: 80%" type="text" value="<?=$row["p1_techused"]?>" name="p1_tec" />
</div>
</div>    
<div class="row">
<div class="col-sm-4">
    <lable>Topic </lable><br><input style="width: 80%" type="text" value="<?=$row["p2_topic"]?>" name="p2_topic" />
</div>
<div class="col-sm-4">
    
    <lable>Description </lable><br><textarea style="width: 100%" name="p2_desc"><?=$row["p2_desc"]?></textarea>
</div>    
<div class="col-sm-4">
    <lable>Technology Used</lable><br><input style="width: 80%" type="text" value="<?=$row["p2_techused"]?>" name="p2_tec" />
</div>
</div>
</div>
</div>
</div>
    <br><br>
<h2>Workshops Attended</h2>
<div class="col-sm-12">
    <textarea style="height: 90px;width: 100%" class="col-sm-4" name="workshops" ><?=$row["workshop"]?></textarea>
</div>
<br><br><br><br><br><br>

<h2>Hobbies</h2>
<div class="col-sm-12">
    <textarea style="height: 90px;width: 100%" class="col-sm-4"  name="hobbies" ><?=$row["hobbies"]?></textarea>
</div>
<br><br><br><br><br><br>
<h2>Achievement</h2>
<div class="col-sm-12">
    <textarea style="height: 90px;width: 100%" class="col-sm-4"  name="achivements" ><?=$row["achivements"]?></textarea>
</div>
<br><br><br><br><br><br>
<h2>Career Objective</h2>
<div class="col-sm-12">
    <textarea style="height: 90px;width: 100%" class="col-sm-4"  name="c_obj"><?=$row["c_obj"]?></textarea>
</div>
<br><br><br><br><br><br>
<input type="submit" class="center-block btn-primary btn-lg" style="width: 20%"/>
<?php if(isset($row["uname"])!=NULL){ ?>
<a href="cv_viewlogin.php" class="btn btn-lg btn-primary pull-right">See as cv</a>
<?php }?>
</form>
