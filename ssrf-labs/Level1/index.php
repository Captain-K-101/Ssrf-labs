<?php

if(isset($_GET ['url'])){
    $url= $_GET['url'];
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
<form action='.' method='GET'>
ENTER THE IMG URL:<input type='text' name='url'>
<br><br>
<input type='submit'>
</center>
</form>

</body>
</html>