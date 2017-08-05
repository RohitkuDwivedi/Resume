<link rel="stylesheet" href="vendor/bs/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<script src="vendor/jquery-3.1.0.min.js"></script>
<script src="vendor/bs/js/bootstrap.min.js"></script>
<?php

$con = mysqli_connect("localhost", "root", "") or exit("could not connect!");
mysqli_select_db($con, "cv_php");
session_start();
if(isset($_REQUEST["user_name"])){
    $uname = $_REQUEST["user_name"];    
}
else {
    $uname =$_SESSION["user_name"];
}
$query = "select * from cv_users where user_name = '$uname'";
$r = mysqli_query($con, $query) or exit(mysqli_error($con));    
$row = mysqli_fetch_assoc($r);
?>
<?php 
error_reporting(0);
?>

<body style="margin:20px;padding:10px;">
<div class="format"> 
   <h2><?=$row["uname"]?></h2>
    <p class="header"><strong>
            <?=$row["email_id"]?><br>
            <?=$row["phno"]?></strong></p></div>
<div >
    <h3 class="bg-success format ">CAREER OBJECTIVE:</h3>
    <p class="format"><?=$row["c_obj"]?></p>
</div>
   <h3 class="format bg-success"> ACADEMIC QUALIFICATION:</h3>
    <table  border="1" CELLSPACING="0"  cellpadding="2" class="format">
            <tr>
                <th>  COURSE  </th>
                <th>NAME OF INSTITUTE</th>
                <th>UNIVERSITY/BOARD</th>
                <th>C.G.P.A/PERCENTAGE</th>
                <th>YEAR OF PASSING</th>
            </tr>
        
        <tbody>
            <?php if($row["m_per"]!="0" && $row["m_per"]!=NULL){?>
            <tr>
                <td>Masters(<?=$row["m_branch"]?>)</td>
               <td><?=$row["m_institute"]?></td>
               <td><?=$row["m_board"]?></td>
                <td><?=$row["m_per"]?></td>
                <td><?=$row["m_year"]?></td>
            </tr>
            <?php }if($row["b_per"]!="0" && $row["b_per"]!=NULL){?>
            <tr>
                <td>Bachelor(<?=$row["b_branch"]?>)</td>
                <td><?=$row["b_institute"]?></td>
                <td><?=$row["b_board"]?></td>
                <td><?=$row["b_per"]?></td>
                <td><?=$row["b_year"]?></td>
            </tr>
            <?php} if($_REQUEST["hsc_per"]!='0' && $_REQUEST["hsc_per"]!=NULL){?>
            <tr>
                <td>12th</td>
                <td><?=$row["hsc_institute"]?></td>
               <td><?=$row["hsc_board"]?></td>
                <td><?=$row["hsc_per"]?></td>
                <td><?=$row["hsc_year"]?></td>
            </tr>
            <?php }if($row["ssc_per"]!=NULL && $row["ssc_per"]!=0){?>
            <tr>
                <td>10th</td>
                <td><?=$row["ssc_institute"]?></td>
               <td><?=$row["ssc_board"]?></td>
                <td><?=$row["ssc_per"]?></td>
                <td><?=$row["ssc_year"]?></td>
            </tr>
            <?php }?>
        </tbody>
    </table>
   
<div>
    <div >
    <h3 class="bg-success">TECHNICAL SKILLS</h3>
    <h5><?=$row["techskills"]?></h5>
</div>
    <div >
    <h3 class="bg-success">WORKSHOP ATTENDED</h3>
    <h5><?=$row["workshop"]?></h5>  
</div>
    <div >
    <h3 class="bg-success">LANGUAGES KNOWN</h3>
    <h5><?=$row["language"]?></h5> 
</div>
    <h3 class="bg-success">HOBBIES</h3>
    <h5><?=$row["hobbies"]?></h5>
</div>



<div >
    <h3 class="bg-success">PERSONAL DETAILS</h3>
    <p>Address: <?=$row["adress"]?></p>
    <p>Email:<?=$row["email_id"]?></p>
    <p>Contact no.:<?=$row["phno"]?></p>
    <p>Father name:<?=$row["fname"]?></p>
    <p>DOB:<?=$row["dob"]?></p>
   </div>
<div >
    <h3 class="bg-success">DECLARATION:</h3>
<P>I declare that information provided in frame of my knowledge and are supported by documentation proof.</P>
</div>
    <br>
<div>
    <P>
        DATE:<br>
        PLACE:
    <p style="float: right; margin-right: 100px;">SIGNATURE:</p>
    </P>
</div>
   <?php if(isset($_SESSION["user_name"])){ ?>
    <a href="savepdf.php?user_name=<?=$_SESSION["user_name"]?>" class="btn btn-lg btn-success" >Save as pdf</a>
    <?php
     }
     ?>
</body>
</html>
