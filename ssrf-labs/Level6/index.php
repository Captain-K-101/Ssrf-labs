<?php
include('config.php');

if(isset($_GET['url'])){
    $url=$_GET['url'];
    $parse_url=@parse_url($url);
    $flag=test($parse_url,$url);
    if(!$flag){
        die('check failed');
    }

}

?>
<center>
<h1>THE NEW CAAS CURL AS A SERVICE IS FINALLY OUT </h1>
</center>
GIVE IT A TRY WONT YOU

<form action='.' method='GET'>
Enter ur to get data from: <input type='text' name='url'>
</form>