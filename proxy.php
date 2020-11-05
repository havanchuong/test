<?php
$url = 'http://dynupdate.no-ip.com/ip.php';
$proxy = '103.57.223.216:9999';
//$proxyauth = 'user:password';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
//curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$curl_scraped_page = curl_exec($ch);
curl_close($ch);

echo $curl_scraped_page;