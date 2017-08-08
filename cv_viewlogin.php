<?php
include_once './header.php';
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
<style>
    .bg-success
    {
        background-color: #cccccc;
    }
    </style>
    <div class="col-sm-offset-2 col-sm-8">
<body style="background-color: white">
    <div class="row">
        <div class="col-sm-12 box">
            <br>
            <?php
             $temp=glob($log_directory."uploads/$row[id].*");
             $src=$temp[0];
             ?>
        <img style="height: 170px; width: 150px; border: #cccccc thick solid" src="<?=$src?>" >
        </div>
        <div class="col-sm-12">
            <div class="format"> 
                <h1 style="text-align: left"><?=$row["uname"]?></h1>
                 <h3 style="text-align: left" ><strong><?=$row["email_id"]?><br>
                 <?=$row["phno"]?></strong></h3>
            </div>
        </div>
    </div>
<div >
    <h3 class="bg-success format ">Career Objective</h3>
    <p class="format"><?=$row["c_obj"]?></p>
</div>
   <h3 class="format bg-success"> Academic Qualification</h3>
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
    <h3 class="bg-success">Technical Skills</h3>
    <h5><?=$row["techskills"]?></h5>
</div>
<div >
    <h3 class="bg-success">Project</h3>
    <?php if($row["p1_topic"]!=NULL){?>
    <h4>Project 1:</h4>
    <h5>Topic: <?=$row["p1_topic"]?></h5>
    <h5>Description: <?=$row["p1_desc"]?></h5>
    <h5>Technology Used: <?=$row["p1_techused"]?></h5>
    <?php }?>
    <?php if($row["p2_topic"]!=NULL){?>
    <h4>Project 2:</h4>
    <h5>Topic: <?=$row["p2_topic"]?></h5>
    <h5>Description: <?=$row["p2_desc"]?></h5>
    <h5>Technology Used: <?=$row["p2_techused"]?></h5>
    <?php }?>
</div>
    <div >
    <h3 class="bg-success">Workshop Attended</h3>
    <h5><?=$row["workshop"]?></h5>  
</div>
    <div >
    <h3 class="bg-success">Achievements</h3>
    <h5><?=$row["achivements"]?></h5>  
</div>
    <div >
    <h3 class="bg-success">Languages Know</h3>
    <h5><?=$row["language"]?></h5> 
</div>
    <h3 class="bg-success">HOBBIES</h3>
    <h5><?=$row["hobbies"]?></h5>
</div>



<div >
    <h3 class="bg-success">Personal Details</h3>
    <p>Address: <?=$row["adress"]?></p>
    <p>Email:<?=$row["email_id"]?></p>
    <p>Contact no.:<?=$row["phno"]?></p>
    <p>Father name:<?=$row["fname"]?></p>
    <p>DOB:<?=$row["dob"]?></p>
   </div>
<div >
    <h3 class="bg-success">Declaration</h3>
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
</div>
<?php include_once './footer.php';?>