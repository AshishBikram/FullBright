<?php
/**
 * Created by PhpStorm.
 * User: ashish
 * Date: 11/16/16
 * Time: 12:13 PM
 */
include '../layout/connection.php';
$output='';

$sql = "select * from project ORDER BY id DESC ";

$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0)
{
    $output .= '<h4 align="center">Search Result</h4>';
    $output .= '<div class="table-responsive">
                          <table class="table table-striped">
                               <tr style="background-color: #21418f">
                                    <th style="color: #ffffff">Sn</th>
                                    <th style="color: #ffffff">Projects</th>
                                    <th style="color: #ffffff">Sector</th>
                                    <th style="color: #ffffff">Completion Date</th>
                                    <th></th>
                               </tr>';
    $i=1;
    while($row = mysqli_fetch_array($result))
    {

        $output .= '
                <tr>
                     <td>'.$i++.'</a></td>
                     <td>'.$row["title"].'</td>
                     <td>'.$row["sector"].'</td>
                     <td>'.$row["start_date"]." to ".$row["end_date"].'</td>
                     <th><i class="glyphicons glyphicons-edit"></i></th>
                </tr>
           ';

    }
    echo $output;
}
