<?php
$disallowed_id = [ "127.0.0.1/24", "169.254.0.0/16", "0.0.0.0/8" ];

function test($url,$url2){
    if(!isset($url['scheme'])||!in_array($url['scheme'],array('http','https'))){
        echo 'scheme failed<br>';
        return 0;
    }
    if(!isset($url['host'])){
        echo 'host not set<br>';
        return 0;
    }
    $ip=gethostbynamel($url['host']);
    $ip= $ip[0];

    foreach($disallowed_id as $nip){
        if(properip($nip,$ip)){
            echo 'ip not allowed<br>';
            return 0;
        }
    }
    $handle = curl_init();
    curl_setopt($handle, CURLOPT_URL, $url2);
    $data = curl_exec($handle);
    curl_close($handle);
    return 1;

 }

function properip($cidr, $ip) {
	list($prefix, $mask) = explode("/", $cidr);
	return 0 === (((ip2long($ip) ^ ip2long($prefix)) >> $mask) << $mask);
}
?>