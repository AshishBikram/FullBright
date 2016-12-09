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
    <div class="container">



            <?php include 'header.php' ?>
            <div class="contact-left col-sm-6" style="background-color: #2a201e;color: #ffffff;">
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
            </div>
            <div class="contact-right col-sm-6 well" style="float: right;background-color: #ffffff">

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


                <div style="width: 100%">
                    <a href="https://www.google.com.np/maps/place/Full+Bright+Consultancy+(Pvt.)+Ltd./@27.6969744,85.3485117,15z/data=!4m5!3m4!1s0x0:0xf086f74ee02eda19!8m2!3d27.6963664!4d85.3523312">View Larger Map</a>
                    <iframe width="100%" height="300" src="http://www.mapi.ie/create-google-map/map.php?width=100%&amp;height=300&amp;hl=en&amp;q=Sinamangal%20Rd+(Full%20Bright%20Consultancy%20(Pvt.)%20Ltd)&amp;ie=UTF8&amp;t=p&amp;z=16&amp;iwloc=A&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="http://www.mapsdirections.info/pt/crie-um-google-map/">Gerador de iFrame do Google Maps</a> on <a href="http://www.mapsdirections.info/pt/">Calcular Rota</a></iframe>
                </div>

            </div>





    </div>
    </body>

</html>