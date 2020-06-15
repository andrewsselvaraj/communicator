<?php
function PostRequest($url, $referer, $_data) {
// convert variables array to string:
$data = array();
while(list($n,$v) = each($_data)){
$data[] = "$n=$v";
}
$data = implode('&', $data);
// format --> test1=a&test2=b etc.
// parse the given URL
$url = parse_url($url);
if ($url['scheme'] != 'http') {
die('Only HTTP request are supported !');
}
// extract host and path:
$host = $url['host'];
$path = $url['path'];
// open a socket connection on port 80
$fp = fsockopen($host, 80);
// send the request headers:
fputs($fp, "POST $path HTTP/1.1\r\n");
fputs($fp, "Host: $host\r\n");
fputs($fp, "Referer: $referer\r\n");
fputs($fp, "Content-type: application/x-www-form-urlencoded\r\n");
fputs($fp, "Content-length: ". strlen($data) ."\r\n");
fputs($fp, "Connection: close\r\n\r\n");
fputs($fp, $data);
$result = '';
while(!feof($fp)) {
// receive the results of the request
$result .= fgets($fp, 128);
}
// close the socket connection:
fclose($fp);
// split the result header from the content
$result = explode("\r\n\r\n", $result, 2);
$header = isset($result[0]) ? $result[0] : '';
$content = isset($result[1]) ? $result[1] : '';
// return as array:
return array($header, $content);
}
?>
	

				
	<?php include("../db/dbconnection.php")?>	
	
 		
		<form action="" method="post">
		
<?php

$pk_user_id[] = $_POST['pk_user_id'];
$mobile_no = $_POST['mobile_no'];
$message = $_POST['message'];


$checked_count = count($_POST['pk_user_id']);
echo "You have selected following ".$checked_count." option(s): <br/>";

//foreach($_POST['pk_user_id'] as $pk_user_id){
//echo $pk_user_id."</br>";
//}
for($i=0;$i<count($_POST['pk_user_id']);$i++){
echo $_POST['pk_user_id'][$i].$_POST['mobile_no'][$i].$_POST['message'][$i];

$mobile_no=$_POST['mobile_no'][$i];
$message=$_POST['message'][$i];

$data = array(
'user' => "vjericot",
'password' => "440831",
'msisdn' => "91".$mobile_no,
'sid' => "WebSMS",
'msg' => "".$message." by Andrews",
'fl' =>"0",
);
list($header, $content) = PostRequest(
"http://www.smslane.com//vendorsms/pushsms.aspx", // the url to post to
"http://efreelearn.com/communicator/sms/sms.php", // its your url
$data
);
echo $content;
}

?>
<BR>
</tbody>

</form>




				


				



    	
    	
            