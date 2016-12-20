<?php
/**
 * Created by PhpStorm.
 * User: ashish
 * Date: 11/20/16
 * Time: 10:51 AM
 */
include_once 'connection.php';
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phoneno=$_POST['phoneno'];
    $contactreason=$_POST['contactreason'];
    $message=$_POST['message'];
    $date = date('Y-m-d H:i:s');

    $sql_query="insert into contact(name,email,phoneno,contactreason,message,date) values ('$name','$email','$phoneno','$contactreason','$message','$date')";
    if($conn->query($sql_query)===TRUE){
        echo "New record created sucessfully";
    }else{
        echo "Error: ".$sql_query ."<br>" .$conn->error;
    }
    $conn->close();
}
?>
<DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../../css/head.css">
        <link rel="stylesheet" type="text/css" href="../../bootstrap-3.3.7-dist/fonts/glyphicons-halflings-regular.svg">
        <link rel="stylesheet" type="text/css" href="../../css/contact.css">

    </head>
    <body>



            <?php include 'header.php' ?>
<div class="container">
            <h2 class="text-center">
                Contact Us
            </h2>
    <hr>
           <!-- <div class="contact-left col-sm-6" style="background-color: #2a201e;color: #ffffff;">
                <h1>
                    Contact Us
                </h1>
                <form method="post" action="contactus.php">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" id="email">
                    </div>
                    <div class="form-group">
                        <label for="phoneno">Phone No</label>
                        <input type="text" class="form-control" name="phoneno" id="phoneno">
                    </div>
                    <div class="form-group">
                        <label for="contactreason">Contact Reason</label>
                        <input type="text" class="form-control" name="contactreason" id="contactreason">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" name="message" style="height:200px;"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" style="float: right;background-color: #323032;border-bottom-color: #323032" name="submit">Submit</button>


                </form>
            </div>-->
          <!--  <div class="contact-right col-sm-6 well" style="float: right;background-color: #ffffff">

                <h3>Get in touch</h3>

                <div class="contact-info" style="color: #000000">
                    <ul style="list-style-type: none">
                        <li>Full Bright Consultancy (Pvt.) Ltd</li>
                        <li>316 Baburam Acharya Sadak</li>
                        <li>Tel: +977 1 4468749</li>
                        <li style="padding-left: 73px;">4468118</li>
                        <li>Fax: +977 1 4465604</li>
                        <li>Email: fab@mos.com.np</li>
                        <li style="padding-left: 43px;">info@mos.com.np</li>
                        <li>Url: www.fbc.com.np</li>
                    </ul>
                </div>


            </div>
-->

            <div class="row pad">
                <div class="col-md-4">
                    <div class="contact-detail-box">
                        <i class="fa fa-book fa-3x text-colored"></i>
                        <h4>Full Bright Consultanct (Pvt. ) Ltd</h4>

                        <p>Engineers, Managers, Planners and <br> Development Strategies</p>
                    </div>
                </div><!-- end col -->

                <div class="col-md-4">
                    <div class="contact-detail-box">
                        <i class="fa fa-th fa-3x text-colored"></i>
                        <h4>Get In Touch</h4>
                        <abbr title="Phone">Phone:</abbr> +977 1 4468118, +977 1 4468749 <br>
                        Email: <a href="#" class="text-muted"> fab@mos.com.np, info@mos.com.np</a>
                    </div>
                </div><!-- end col -->

                <div class="col-md-4">
                    <div class="contact-detail-box">
                        <i class="fa fa-map-marker fa-3x text-colored"></i>
                        <h4>Our Location</h4>

                        <address>
                            316 Baburam Acharya Sadak <br>
                            Sinamangal, Kathmandu
                        </address>
                    </div>
                </div><!-- end col -->



            </div>
            <!-- end row -->
<div class="enter"></div>
<div class="enter"></div>

            <div class="row">
                <div class="col-md-6 pad">
                    <div class="contact-map">

                        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d15713.841410473819!2d-69.32947199999998!3d10.06131395!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2s!4v1481735102432" width="550" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>  </div>
                </div><!-- end col -->

                <!-- Contact form -->
                <div class="col-md-6 pad">
                    <form role="form" method="post" action="contactus.php" class="form-main">



                        <div class="form-group">
                            <label for="name2">Name</label>
                            <input class="form-control" id="name" name="name" onblur="if(this.value == '') this.value='Name'" onfocus="if(this.value == 'Name') this.value=''" type="text" value="Name">
                        </div> <!-- /Form-name -->

                        <div class="form-group">
                            <label for="email2">Email</label>
                            <input class="form-control" id="email" name="email" type="text" onfocus="if(this.value == 'E-mail') this.value='';" onblur="if(this.value == '') this.value='E-mail';" value="E-mail">
                        </div> <!-- /Form-email -->

                        <div class="form-group">
                            <label for="email2">Phone</label>
                            <input class="form-control" id="phoneno" name="phoneno" type="text" onfocus="if(this.value == 'E-mail') this.value='';" onblur="if(this.value == '') this.value='Phone';" value="Phone">
                        </div> <!-- /Form-Phone -->

                        <div class="form-group">
                            <label for="email2">Contact Reason</label>
                            <input class="form-control" id="contactreason" name="contactreason" type="text" onfocus="if(this.value == 'E-mail') this.value='';" onblur="if(this.value == '') this.value='Contact Reason';" value="Contact Reason">
                        </div> <!-- /Form-Contact Reason -->

                        <div class="form-group">
                            <label for="message2">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="5" onblur="if(this.value == '') this.value='Message'" onfocus="if(this.value == 'Message') this.value=''">Message</textarea>
                        </div> <!-- /col -->

                        <button type="submit" class="btn btn-primary pull-right" name="submit">Submit</button>

                    </form> <!-- /form -->
                </div> <!-- end col -->

            </div> <!-- end row -->

</div>
            <div class="enter"></div>
            <div class="enter"></div>
            <?php include "footer.php" ?>


    </body>

</html>