<?php


function curl_get_contents($url)
{
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);

    $data = curl_exec($ch);
    curl_close($ch);

    return $data;
}

if(isset($_GET ['url'])){
    $url= $_GET['url'];
    $check=parse_url($url);
    if($check["scheme"]==null){
        die('Protocol not allowed');
    }
    if(substr( $url, 0, 4 ) !== "http"){
        die('does not start with http');
    }
    
    if($check['host']=='localhost'||$check['host']=='127.0.0.1'||$check['host']=='127.1' ||$check['host']=='0.0.0.0' ){

        die('Sorry '.$check['host'].'is not allowed');
    }
    print_r(file_get_contents($url));
}

?>
<html>
<body>
<center><h1>THE IMAGE DOWNLOADER</h1></center>

<br><br><br><br><br>
<center>
<form action='.' method='GET'>

ENTER THE IMG URL:<input type='text' name='url'>
<br><br>
<input type='submit'>
</center>
</form>

</body>
</html>