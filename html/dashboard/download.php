<?php
/**
 * Created by PhpStorm.
 * User: ashish
 * Date: 11/28/16
 * Time: 12:32 PM
 */
$fullname=$_POST['fullname'];
$uploadcv=$_POST['uploadcv'];
$ext=explode('/',$uploadcv);
$et=end($ext);
$ext1=explode('.',$et);
$exte=end($ext1);
header('Content-type:file');
header('Content-Disposition:attachment; filename="'.$fullname.'.'.$exte.'"');
readfile($upload);
exit();