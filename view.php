<!DOCTYPE html >
<link rel="stylesheet" href="vendor/bs/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<script src="vendor/jquery-3.1.0.min.js"></script>
<script src="vendor/bs/js/bootstrap.min.js"></script>
<body style="margin:20px;padding:10px;">
    <br><br><br>
    <div class="format"> 
   <h2><span ng-bind="uname"></span></h2>
    <p><strong>
            <span ng-bind="email"></span><br>
            <span ng-bind="pn"></span></strong></p></div>
<div >
    <h3 class="bg-success format ">CAREER OBJECTIVE:</h3>
    <p class="format"><span ng-bind="c_obj"></span></p>
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
            <tr>
                <td>Masters(<span ng-bind="m_branch"></span>)</td>
               <td><span ng-bind="m_institute"></span></td>
               <td><span ng-bind="m_board"></span></td>
                <td><span ng-bind="m_per"></span></td>
                <td><span ng-bind="m_year"></span></td>
            </tr>
            <tr>
                <td>Bachelor(<span ng-bind="b_branch"></span>)</td>
                <td><span ng-bind="b_institute"></span></td>
               <td><span ng-bind="b_board"></span></td>
                <td><span ng-bind="b_per"></span></td>
                <td><span ng-bind="b_year"></span></td>
            </tr>
            <tr>
                <td>12th</td>
               <td><span ng-bind="hsc_institute"></span></td>
               <td><span ng-bind="hsc_board"></span></td>
                <td><span ng-bind="hsc_per"></span></td>
                <td><span ng-bind="hsc_year"></span></td>
            </tr>
            <tr>
                <td>10th</td>
                <td><span ng-bind="ssc_institute"></span></td>
               <td><span ng-bind="ssc_board"></span></td>
                <td><span ng-bind="ssc_per"></span></td>
                <td><span ng-bind="ssc_year"></span></td>
            </tr>
            </tbody>
    </table>
   <div >
    <h3 class="bg-success">TECHNICAL SKILLS</h3>
    <h5><span ng-bind="techskills"></span></h5>
</div>
    <div >
    <h3 class="bg-success">WORKSHOP ATTENDED</h3>
    <h5><span ng-bind="workshop"></span></h5>  
</div>
    <div >
    <h3 class="bg-success">LANGUAGES KNOWN</h3>
    <h5><span ng-bind="lang"></span></h5> 
</div>
<div >
    <h3 class="bg-success">ACHIVEMENTS</h3>
    <h5><span ng-bind="achive"></span></h5> 
</div>
    <h3 class="bg-success">HOBBIES</h3>
    <h5><span ng-bind="hobbies"></span></h5>
<div >
    <h3 class="bg-success">PERSONAL DETAILS</h3>
    <p>Address: <span ng-bind="add"></span></p>
    <p>Email:<span ng-bind="email"></span></p>
    <p>Contact no.:<span ng-bind="pn"></span></p>
    <p>Father name:<span ng-bind="fname"></span></p>
    <p>DOB:<span ng-bind="dob"></span></p>
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
    <br><br><br><br><br>
    <H2 style="color: #006699" class="text-center">Login to download your CV as pdf</H2>
        <div class="row">
        <div class="col-sm-offset-5 col-sm-4">
        <a class="btn btn-lg btn-primary" href="login.php">Login</a>
        </div>
        </div>
       </body>
</html>
