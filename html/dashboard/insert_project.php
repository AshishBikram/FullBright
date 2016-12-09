<?php
/**
 * Created by PhpStorm.
 * User: ashish
 * Date: 11/14/16
 * Time: 12:08 PM
 */

include_once '../layout/connection.php';

if(isset($_POST['save']))
{
    $title=$_POST['title'];
    $client=$_POST['client'];
    $funding_agency=$_POST['funding_agency'];
    $sector=$_POST['sector'];
    $start_date=$_POST['start_date'];
    $end_date=$_POST['end_date'];
    $description=$_POST['description'];

    $sql_query="insert into project(title,client,funding_agency,sector,start_date,end_date,description) values ('$title','$client','$funding_agency','$sector','$start_date','$end_date','$description')";
    if($conn->query($sql_query)===TRUE){
        echo "New record created sucessfully";
    }else{
        echo "Error: ".$sql_query ."<br>" .$conn->error;
    }
    $conn->close();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../css/layout.css">
    <link rel="stylesheet" type="text/css" href="../../css/project.css">
    <script src="../../javascript/project.js"></script>




</head>
<body>

    <div class="body">


            <?php include 'header1.php' ?>


            <div class="col-sm-10" style="margin-left: 80px;background-color: #f1f1f1;bottom-radius: 2px">
                <div class="form-header">
                    <h2>Enter Project Information</h2>
                </div>
                <hr>
                <form action="insert_project.php" method="post">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Enter project name">
                    </div>
                    <div class="form-group">
                        <label for="client">Client</label>
                        <input type="text" class="form-control" name="client" id="client" placeholder="Enter client name">
                    </div>
                    <div class="form-group">
                        <label for="funding_agency">Funding Agency</label>
                        <input type="text" class="form-control" name="funding_agency" id="funding_agency" placeholder="Enter funding agency">
                    </div>
                    <div class="form-group">
                        <label for="sector">Sector</label>
                        <select class="form-control" id="sector" name="sector">
                            <option>Transportation - Roads & Highways, Railways </option>
                            <option>Agriculture & Food Security, Irrigation, Natural Resources </option>
                            <option>Environment and Climate Change  </option>
                            <option>Urban Development, Architecture and Other Infrastructure </option>
                            <option>Economic Growth, Finance, Law, and Public Policy </option>
                            <option>GIS, Survey & Mapping, and Information Technology</option>
                            <option>Institutional Development, Capacity Building and Training</option>
                            <option>Health and Population</option>
                            <option>Energy</option>
                            <option>Industry, Trade, and Tourism</option>
                            <option>Education</option>
                            <option>Water Supply, Sanitation, and Waste Management</option>
                            <option>Disaster Risk Reduction and Management</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="start_date">Start Date</label>
                        <input class="form-control" type="month" id="start_date" name="start_date">
                    </div>
                    <div class="form-group">
                        <label for="end_date">End Date</label>
                        <input class="form-control" type="month" name="end_date" id="end_date">
                    </div>
                    <div class="form-group">
                        <label for="description">Project Description</label>
                        <textarea class="form-control" rows="10" name="description"></textarea>
                    </div>
                    <button type="submit" class="btn" style="background-color: #21418f;color: #ffffff" name="save" id="save">Save</button>
                </form>
            </div>





    </div>

</body>

</html>

