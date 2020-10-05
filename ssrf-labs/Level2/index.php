<?php

if(isset($_GET ['url'])){
    $url= $_GET['url'];
    $check=parse_url($url);
    if($check["scheme"]==null){
        die('NO protocal present : request error');
    }
    $image = fopen($url, 'rb');
    header("Content-Type: image/png");
    fpassthru($image);
}

?>
<html>
<body>
<center><h1>THE IMAGE DOWNLOADER</h1></center>
We are checking protocol now
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