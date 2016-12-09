<?php
/**
 * Created by PhpStorm.
 * User: ashish
 * Date: 11/15/16
 * Time: 10:33 AM
 */
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../css/layout.css">
    <link rel="stylesheet" type="text/css" href="../../css/project.css">
    <script src="../../javascript/project.js"></script>
    <script src="../../javascript/jquery.js"></script>

    <title></title>
</head>
<body>

        <div class="body">
            <div class="container">

                <?php include 'header.php' ?>

                <div class="search-body">
                    <div class="search-header">
                        <h3></h3>
                    </div>
                    <form action="" id="livesearch" >
                        <div class="form-group">
                                <label for="sector" style="float: left;padding-right: 80px">Sector:</label>
                                <select class="form-control" style="width: 300px;" id="sector" name="sector" onchange="showHint()">
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
                            <input class="form-control" type="month" name="end_date" id="end_date" style="width: 300px;margin-left: 30px" onchange="showHint()">
                        </div>
                    </form>
                    </br>
                    <div id="result"></div>

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
            url: "fetch.php",
            method: "post",
            data: {sector: sector, end_date: end_date},
            dataType: "text",
            success: function (data) {
                $('#result').html(data);
            }
        });
    }
/*    $(document).ready(function() {
        if($('#experience').val()!=''){
            $.ajax({
                url: "fetch.php",
                method: "post",
                data: {},
                dataType: "text",
                success: function (data) {
                    $('#result').html(data);
                }
            });
        }

    })*/
</script>