<?php
/**
 * Created by PhpStorm.
 * User: ashish
 * Date: 11/16/16
 * Time: 12:13 PM
 */
include '../layout/connection.php';
$output='';
$sql = "select * from CV ORDER BY cv_id DESC ";

$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0)
{

    $output .= '<div class="table-responsive">
                          <table class="table table-striped">
                               <tr style="background-color: #21418f">
                                    <th style="color: #ffffff">Sn</th>
                                    <th style="color: #ffffff">Full Name</th>
                                    <th style="color: #ffffff">Address</th>
                                    <th style="color: #ffffff">Phone No</th>
                                    <th style="color: #ffffff">Email</th>
                                    <th style="color: #ffffff">CV</th>

                               </tr>';
    $i=1;
    while($row = mysqli_fetch_array($result))
    {

        $output .= '
                <tr>
                     <td>'.$i++.'</a></td>
                     <td>'.$row["fullname"].'</td>
                     <td>'.$row["address"].'</td>
                     <td>'.$row["phoneno"].'</td>
                     <td>'.$row["email"].'</td>
                     <td>
                     <form action="download.php" method="post">
                     <input type="text" value='.$row["fullname"].' name="fullname" hidden="hidden">
                     <button type="submit" value='.$row["uploadcv"].' name="uploadcv">Download</button></form>
                     </td>
                </tr>
           ';

    }
    echo $output;
}
