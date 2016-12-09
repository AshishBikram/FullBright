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

        <?php include 'header1.php' ?>


            <div id="result"></div>

        </div>



    </div>
</div>
</body>
</html>
<script type="text/javascript">




    $(document).ready(function() {

     $.ajax({
     url: "fetch1.php",
     method: "post",
     data: {},
     dataType: "text",
     success: function (data) {
     $('#result').html(data);
     }
     });


     })
</script>