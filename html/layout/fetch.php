<?php
/**
 * Created by PhpStorm.
 * User: ashish
 * Date: 11/16/16
 * Time: 12:13 PM
 */
include 'connection.php';
$output='';
$sector=$_POST['sector'];
$end_date=$_POST['end_date'];
$experience=$_POST['experience'];
$sql = "";
if($sector!="" && $end_date!="") {
    $sql = "Select * from project WHERE sector LIKE '%$sector%' && end_date LIKE '%$end_date%'";
}else if($sector!="") {
    $sql="Select * from project WHERE sector LIKE '%$sector%'";

}else if($end_date!="")  {
    $sql="Select * from project WHERE end_date LIKE '%$end_date%'";
}
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
                </tr>
           ';

    }
    echo $output;
}
