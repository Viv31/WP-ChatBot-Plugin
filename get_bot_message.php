<?php
date_default_timezone_set('Asia/Kolkata');
//include('database.inc.php');
require_once('../../../wp-config.php');
global $wpdb;
$txt = $_POST['txt'];
$sql="select reply from chatbot_hints where question like '%$txt%'";
//echo $sql;die();
$row = $wpdb->get_results($sql,ARRAY_A);
$rowcount = count($row);
//print_r($row);
if($rowcount > 0){
	$html = $row[0]['reply'];
}else{
	//die('sorry');
	$html="Sorry not be able to understand you";
}
echo $html;

// $res=mysqli_query($con,$sql);
// if(mysqli_num_rows($res)>0){
// 	$row = mysqli_fetch_assoc($res);
// 	$html=$row['reply'];
// }else{
// 	$html="Sorry not be able to understand you";
// }
// $added_on=date('Y-m-d h:i:s');
// mysqli_query($con,"insert into message(message,added_on,type) values('$txt','$added_on','user')");
// $added_on=date('Y-m-d h:i:s');
// mysqli_query($con,"insert into message(message,added_on,type) values('$html','$added_on','bot')");
// echo $html;




?>