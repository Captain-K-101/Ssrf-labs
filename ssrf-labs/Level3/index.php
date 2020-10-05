<?php

if(isset($_GET ['url'])){
    $url= $_GET['url'];
    $check=parse_url($url);

    if($check["scheme"]==null || $check["scheme"]=='file' ){
        die('NO protocal present : request error');
    }
    if(substr( $url, 0, 4 ) !== "http"){
        die('does not start with http');
    }
    $image = fopen($url, 'rb');
    header("Content-Type: image/png");
    fpassthru($image);
}

?>
<html>
<body>
<center><h1>THE IMAGE DOWNLOADER</h1></center>

<br><br><br><br><br>
<center>
NOW EXTRA SECURE NO MORE FILE shenanigans
<form action='.' method='GET'>
ENTER THE IMG URL:<input type='text' name='url'>
<br><br>
<input type='submit'>
</center>
</form>

</body>
</html>