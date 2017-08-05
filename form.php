<form class="" method="POST" enctype="multipart/form-data" >

    <h1> Enter the Details:</h1>
<h2>Personal Details</h2>
<div class="col-sm-12">
               <div class="col-sm-6">
                   <lable>Name </lable><br><input style="width: 70%" type="text" ng-model="uname" name="uname"/>
                    </div>
               <div class="col-sm-6">
                   <lable>Email </lable><br><input style="width: 70%" type="email" ng-model="email" name="email"/>
               </div> 
               <div class="col-sm-6">
                    <lable>Phone No </lable><br><input style="width: 70%" type="number" ng-model="pn" name="pn"/> 
                    
               </div>
                <div class="col-sm-6">
                    <lable>Web site </lable><br><input style="width: 70%" type="url" ng-model="website" name="website"/>    
                </div>
                <div class="col-sm-6">
                   <lable>Father's Name </lable><br><input style="width: 70%" type="text"ng-model="fname" name="fname"/>
                    </div>
               <div class="col-sm-6">
                   <lable>Address </lable><br><input style="width: 70%" type="text"ng-model="add" name="add"/>
                    </div>
               <div class="col-sm-6">
                   <lable>Date of Birth </lable><br><input style="width: 70%" type="date"ng-model="dob" name="dob"/>
                    </div>
               <div class="col-sm-6">
                   <lable>Languages Known </lable><br><input style="width: 70%" type="text"ng-model="lang" name="lang"/>
                    </div>
               
               <hr>
           </div>
<br><br><br><br><br><br><br><br><br><br>
<!--Academic details-->
<h2>Academic details</h2>
<div class="row" >
<div class="col-sm-3 ">
    <h3 class="text-left container-fluid"> S.S.C</h3>
               <div class="col-sm-12">
                   <lable>Percent/CGPA </lable><br><input type="number" style="width: 130px" step="0.01" min="0" max="100" ng-model="ssc_per" name="ssc_percentage" />
               </div> 
                <div class="col-sm-12">
                     <lable>Board/University </lable><br><input type="text" style="width: 130px" ng-model="ssc_board" name="ssc_board" />
                </div>
                <div class="col-sm-12">
                     <lable>Institute Name </lable><br><input type="text" style="width: 130px" ng-model="ssc_institute" name="ssc_inst" />
                </div>
                <div class="col-sm-12">
                    <lable>Year </lable><br><input type="number" style="width: 130px" ng-model="ssc_year" name="ssc_year" />    
                </div>
</div>
<div class="col-sm-3">
    <h3 class="text-left container-fluid"> H.S.C</h3>

               <div class="col-sm-12">
                   <lable>Percent/CGPA </lable><br><input type="number" style="width: 130px" step="0.01" min="0" max="100" ng-model="hsc_per" name="hsc_percentage" />
               </div> 
                <div class="col-sm-12">
                     <lable>Board/University </lable><br><input type="text" style="width: 130px" ng-model="hsc_board" name="hsc_board"/>
                </div>
                <div class="col-sm-12">
                     <lable>Institute Name </lable><br><input type="text" style="width: 130px" ng-model="hsc_institute" name="hsc_inst" />
                </div>
                <div class="col-sm-12">
                    <lable>Year </lable><br><input type="number" style="width: 130px" ng-model="hsc_year" name="hsc_year"/>    
                </div>
           </div>
<div class="col-sm-3">
 <h3 class="text-left container-fluid"> Bachelor</h3>
               <div class="col-sm-12">
                   <lable>Percentage </lable><br><input type="number" style="width: 130px" step="0.01" min="0" max="100" ng-model="b_per" name="b_percentage"/>
               </div> 
                <div class="col-sm-12">
                     <lable>Board/University </lable><br><input type="text" style="width: 130px" ng-model="b_board" name="b_board"/>
                </div><div class="col-sm-12">
                     <lable>Institute Name </lable><br><input type="text" style="width: 130px" ng-model="b_institute" name="b_inst" />
                </div>
                
                <div class="col-sm-12">
                    <lable>Year </lable><br><input type="number" style="width: 130px" ng-model="b_year" name="b_year" />    
                </div>
                <div class="col-sm-12">
                   <lable>Branch </lable><br><input type="text" style="width: 130px" ng-model="b_branch" name="b_branch"/>
               </div>
               
</div>
<div class="col-sm-3">
    <h3 class="text-left container-fluid"> Masters</h3>

               <div class="col-sm-12">
                   <lable>Percentage </lable><br><input type="number" style="width: 130px" step="0.01" min="0" max="100" ng-model="m_per" name="m_percentage"/>
               </div> 
                <div class="col-sm-12">
                     <lable>Board/University </lable><br><input type="text" style="width: 130px" style="width: 130px"ng-model="m_board" name="m_board"/>
                </div><div class="col-sm-12">
                     <lable>Institute Name </lable><br><input type="text" style="width: 130px" ng-model="m_institute" name="m_inst" />
                </div>
                
                <div class="col-sm-12">
                    <lable>Year </lable><br><input type="number" style="width: 130px" ng-model="m_year" name="m_year"/>    
                </div>
                 <div class="col-sm-12">
                   <lable>Branch </lable><br><input type="text" style="width: 130px" ng-model="m_branch" name="m_branch"/>
               </div>
           </div>
                
               
</div>
<br><br>
<h2>Technical skills</h2>
<div class="col-sm-12">
    <div class="col-sm-12">
            <textarea style="height: 90px;width: 100%" class="col-sm-4" ng-model="techskills"  name="tech"></textarea>
    </div>
</div>
<br><br><br><br><br>
<h2>Projects</h2>
<div class="col-sm-12">
<div class="row">
<div class="col-sm-4">
    <lable>Topic </lable><br><input style="width: 80%" type="text" ng-model="p1_topic" name="p1_topic" />
</div>
<div class="col-sm-4">
    
    <lable>Description </lable><br><textarea style="width: 100%" ng-model="p1_desc" name="p1_desc"></textarea>
</div>    
<div class="col-sm-4">
    <lable>Technology Used</lable><br><input style="width: 80%" type="text" ng-model="p1_techused" name="p1_tec" />
</div>

</div>
<div class="row">
<div class="col-sm-4">
    <lable>Topic </lable><br><input style="width: 80%" type="text" ng-model="p1_topic" name="p2_topic" />
</div>
<div class="col-sm-4">
    
    <lable>Description </lable><br><textarea style="width: 100%" ng-model="p2_desc" name="p2_desc"></textarea>
</div>    
<div class="col-sm-4">
    <lable>Technology Used</lable><br><input style="width: 80%" type="text" ng-model="p2_techused" name="p2_tec" />
</div>

</div>
</div>
    <br>
<h2>Workshops Attended</h2>
<div class="col-sm-12">
    <textarea style="height: 90px;width: 100%" class="col-sm-4"ng-model="workshop" name="workshops" ></textarea>
</div>
<br><br><br><br><br><br>

<h2>Hobbies</h2>
<div class="col-sm-12">
    <textarea style="height: 90px;width: 100%" class="col-sm-4" ng-model="hobbies" name="hobbies" ></textarea>
</div>
<br><br><br><br><br><br>
<h2>Achivements</h2>
<div class="col-sm-12">
    <textarea style="height: 90px;width: 100%" class="col-sm-4"ng-model="achive" name="achivements" ></textarea>
</div>
<br><br><br><br><br><br>
<h2>Career Objective</h2>
<div class="col-sm-12">
    <textarea style="height: 90px;width: 100%" class="col-sm-4"ng-model="c_obj"  name="c_obj" ></textarea>
</div>
</form>
