<?php
/**
 * Created by PhpStorm.
 * User: ashish
 * Date: 11/30/16
 * Time: 11:12 AM
 */
?>
<doctype html>
    <html>
         <head>
             <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
             <link rel="stylesheet" type="text/css" href="../../css/head.css" >

        </head>
        <body>
            <div class="head">
                <div class="logo col-sm-12" style="background-color: #ffffff">
                    <img src="../../images/logo.png" style="width: 40%">
                    <img src="../../images/30-years-logo.png" style="float: right;height: 100px;width: 200px">
                </div>

                <div class="menu col-sm-12" >
                    <ul>
                        <li style="margin-left: 0px" ><button class="dropbtn"><a href="home.php" >Home</a></button></li>
                        <li ><button class="dropbtn"><a href="">About us</a></button></li>
                        <li >
                            <div class="dropdown">
                                <button class="dropbtn"><a href="">Resources</a></button>
                                <div class="dropdown-content">
                                    <a href="">Management</a>
                                    <a href="">Organization Structure and Staffing</a>
                                    <a href="">Equipment and Other Facilities</a>
                                    <a href="">Financial Standing</a>
                                    <a href="">Association</a>
                                    <a href="">Clients</a>
                                </div>
                            </div>
                        </li>
                        <li >
                            <div class="dropdown">
                                <button class="dropbtn"> <a href="">Services</a></button>
                                <div class="dropdown-content">
                                    <a href="">Major Services by Category</a>
                                    <a href="">Professional Services by Sector</a>
                                    <a href="">Range of Services by Activity</a>
                                </div>
                            </div>
                        </li>
                        <li ><button class="dropbtn" id="experience" value="experience" "><a href="projectlist.php">Experience</a></button></li>
                        <li ><button class="dropbtn"><a href="uploadcv.php">Career</a></button></li>
                        <li ><button class="dropbtn"><a href="contactus.php">Contact us</a></button></li>
                    </ul>
                </div>


            </div>
        </body>
    </html>