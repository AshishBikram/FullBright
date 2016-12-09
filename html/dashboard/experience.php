<?php
/**
 * Created by PhpStorm.
 * User: ashish
 * Date: 11/14/16
 * Time: 12:08 PM
 */

include_once 'connection.php';

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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css" media="screen">
        <link rel="stylesheet" type="text/css" href="../../css/layout.css">
        <link rel="stylesheet" type="text/css" href="../../css/project.css">
        <script src="../../javascript/project.js"></script>




    </head>
    <body>
    <div class="page" >
        <div class="body">
            <div class="container">

                <?php include 'header1.php' ?>
                <div class="search-body">
                    <div class="search-header">
                        <h3>Project Experience</h3>
                        <button type="button"  class="btn btn-info btn-primary btn-lg" data-toggle="modal" data-target="#mymodal" style="float: right;padding: 5px;font-size: 20px; background-color: blue">Add project</button>
                        <div class="modal fade" id="mymodal" role="dialog" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">

                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times</button>
                                        <h2>Enter Project Information</h2>
                                    </div>
                                    <div class="modal-body">
                                        <form action="experience.php" method="post">
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
                            </div>
                        </div>

                    </div>

                    <form action="" id="livesearch">
                        <div class="form-group">
                            <label for="sector" style="float: left;padding-right: 80px">Sector:</label>
                            <select class="form-control" style="width: 400px;" id="sector" name="sector" onchange="showHint()">
                                <option>------Select Sector--------------</option>
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
                            <label for="end_date" style="float: left;padding-right: 13px">Completion Date:</label>
                            <input class="form-control" type="month" name="end_date" id="end_date" style="width: 400px;margin-left: 30px" onchange="showHint()">
                        </div>
                    </form>

                    </br>
                    <div id="result"></div>

                </div>


                <!--<div class="col-sm-10" style="margin-left: 80px;background-color: #f1f1f1;bottom-radius: 2px">
                    <div class="form-header">
                        <h2>Enter Project Information</h2>
                    </div>
                    <hr>
                    <form action="experience.php" method="post">
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
-->



            </div>
        </div>
    </div>
    </body>

</html>
<script type="text/javascript">

    var sector = '';
    var end_date = '';

    function showHint() {
        sector = $('#sector').val();
        end_date = $('#end_date').val();
        $.ajax({
            url: "../layout/fetch.php",
            method: "post",
            data: {sector: sector, end_date: end_date},
            dataType: "text",
            success: function (data) {
                $('#result').html(data);
            }
        });
    }
    $(document).ready(function() {
     if($('#experience').val()!=''){
     $.ajax({
     url: "fetchexperience.php",
     method: "post",
     data: {},
     dataType: "text",
     success: function (data) {
     $('#result').html(data);
     }
     });
     }

     })
</script>