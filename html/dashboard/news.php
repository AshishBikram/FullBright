<?php
/**
 * Created by PhpStorm.
 * User: ashish
 * Date: 11/20/16
 * Time: 10:51 AM
 */
include_once '../layout/connection.php';
if(isset($_POST['post']))
{
    $news_title=$_POST['news_title'];
    $date=$_POST['date'];
    $news_description=$_POST['news_description'];


    $sql_query="insert into job_vacancy(news_title,date,news_description) values ('$news_title','$date','$news_description')";
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
        <link rel="stylesheet" type="text/css" href="../../css/layout.css">
        <link rel="stylesheet" type="text/css" href="../../css/contact.css">

    </head>
    <body>
    <div class="body">
        <div class="container">


            <?php include 'header1.php' ?>
            <div class="contact-left col-sm-6">
                <h1>
                    Job post
                </h1>
                <form method="post" action="jobvacancy.php">
                    <div class="form-group">
                        <label for="news_title">News Title</label>
                        <input type="text" class="form-control" name="news_title" id="news_title">
                    </div>
                    <div class="form-group">
                        <label for="date">Date</label>
                        <input type="date" class="form-control" name="date" id="date">
                    </div>
                    <div class="form-group">
                        <label for="news_description">Message</label>
                        <textarea class="form-control" id="news_description" name="news_description" style="height:200px;"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" style="float: right" name="post">Post</button>


                </form>
            </div>





        </div>
    </div>
    </body>

    </html>