# Simple php script for get simple <br>info about viction
![inforgat](https://user-images.githubusercontent.com/73488317/119658878-889d2700-be25-11eb-8855-7140213547b8.png)

↑ IP<br>
↑ OS<br>
↑ Browser<br>
↑ Device<br>

You can also add this code for sava the info in a file txt :

$date = date(y.m.d);

    $file=fopen("form-save.txt" , "a");
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
