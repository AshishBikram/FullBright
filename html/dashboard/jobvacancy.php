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
    $job_position=$_POST['job_position'];
    $document_required=$_POST['document_required'];
    $job_category=$_POST['job_category'];
    $expiry_date=$_POST['expiry_date'];
    $job_description=$_POST['job_description'];
    $post_date = date('Y-m-d');

    $sql_query="insert into job_vacancy(job_position,document_required,job_category,post_date,expiry_date,job_description) values ('$job_position','$document_required','$job_category','$post_date','$expiry_date','$job_description')";
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
                        <label for="job_position">Job Position</label>
                        <input type="text" class="form-control" name="job_position" id="job_position">
                    </div>
                    <div class="form-group">
                        <label for="document_required">Document Required</label>
                        <input type="text" class="form-control" name="document_required" id="document_required">
                    </div>
                    <div class="form-group">
                        <label for="job_category">Job Category</label>
                        <input type="text" class="form-control" name="job_category" id="job_category">
                    </div>
                    <div class="form-group">
                        <label for="expiry_date">Expiry Date</label>
                        <input type="date" class="form-control" name="expiry_date" id="expiry_date">
                    </div>
                    <div class="form-group">
                        <label for="job_description">Message</label>
                        <textarea class="form-control" id="job_description" name="job_description" style="height:200px;"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" style="float: right" name="post">Post</button>


                </form>
            </div>





        </div>
    </div>
    </body>

    </html>