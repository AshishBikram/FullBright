<?php
/**
 * Created by PhpStorm.
 * User: ashish
 * Date: 11/14/16
 * Time: 12:08 PM
 */

include_once 'connection.php';

if(isset($_POST['upload']))
{
    $fullname=$_POST['fullname'];
    $address=$_POST['address'];
    $phoneno=$_POST['phoneno'];
    $email=$_POST['email'];



    $target_dir = "/var/www/html/FullBright/uploadcv/";
    $target_fi=basename($_FILES["uploadcv"]["name"]);
    $file_extn = substr($target_fi, strrpos($target_fi, '.')+1);
    echo $file_extn;
    $rand_file =rand(0,1000000000);

    $target_file=$target_dir.$rand_file.'.'.$file_extn;
//    $target_file = $target_dir . basename($_FILES["uploadcv"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["uploadcv"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 1;
        }
    }
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["uploadcv"]["tmp_name"], $target_file)) {
            $sql_query="insert into CV(fullname,address,phoneno,email,uploadcv) values ('$fullname','$address','$phoneno','$email','$target_file')";
            if($conn->query($sql_query)===TRUE){
                echo "New record created sucessfully";
            }else{
                echo "Error: ".$sql_query ."<br>" .$conn->error;
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }


    $conn->close();
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../css/project.css">
    <link rel="stylesheet" type="text/css" href="../../css/layout.css">
    <script src="../../javascript/jquery.js"></script>


</head>
<body>
<div class="page" >
    <div class="body">
        <div class="container">


                <?php include 'header.php' ?>

            <div class="col-sm-10" style="margin-left: 80px;background-color: #f1f1f1;bottom-radius: 2px">
                <div class="form-header">
                    <h2>Upload Your CV</h2>
                </div>
                <hr>
                <form action="uploadcv.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="fullname">Full Name</label>
                        <input type="text" class="form-control" name="fullname" id="title" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" name="address" id="address" placeholder="Enter your Address">
                    </div>
                    <div class="form-group">
                        <label for="phoneno">Phone No</label>
                        <input type="text" class="form-control" name="phoneno" id="phoneno" placeholder="Enter your Phone Number">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter your Phone Number">
                    </div>
                    <div class="form-group">
                            <label for="uploadcv">Upload CV:</label>
                            <input type="file" class="filestyle" id="uploadcv" name="uploadcv">
                    </div>

                    <button type="submit" class="btn" style="background-color: #21418f;color: #ffffff" value="upload" name="upload">Upload</button>
                </form>
            </div>




        </div>
    </div>
</div>
</body>

</html>