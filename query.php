<?php include './header.php';
if (isset($_POST["email"])) {
    $to="rdwivedi345@gmail.com";
    $sub="CV Maker Customer-Query";
    $msg=$_POST["message"]." \n Msg from: $_POST[email]";
    mail_it($to, $sub, $msg, $atch);  
}
?>
<div class="col-sm-8 col-sm-offset-2">
<div class="col-sm-12">        
                <form class="form-horizontal" method="post">
                    <fieldset>
                        <legend class="text-center header mybg" >Ask Query</legend>

                        <div class="form-group">
                            <span class="col-sm-1  text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-sm-10">
                                <input required id="fname" name="fname" type="text"  placeholder="Name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-sm-1  text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-sm-10">
                                <input required id="email" name="email" type="text" placeholder="Email Address" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-sm-1  text-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-sm-10">
                                <input required id="phone" name="phone" type="text"  placeholder="Phone" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-sm-1  text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-sm-10">
                                <textarea required class="form-control" id="message" name="message" placeholder="Enter your massage for us here. We will get back to you within 2 business days." rows="7"></textarea>
                            </div>
                        </div>
                        <div  class="form-group">
                            <div class="col-sm-10 col-sm-offset-1">
                           <h4 style="color: red;"></h4>
                            </div>  
                        </div>  
                        <div class="form-group">
                            <div class="col-sm-10 col-sm-offset-1 text-center">
                                <button type="submit" class="btn btn-success btn-lg btn-block">Submit</button>
                            </div>
                        </div>
                    </fieldset>
                </form>        
    </div>

</div>

<?php include './footer.php'; ?>