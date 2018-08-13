<?php 
$curl_post_data = '{"contact_name":"'.$_POST[contact_name].'","contact_phone":"'.$_POST[contact_phone].'","contact_detail":"'.$_POST[contact_detail].'"}';
$url = "http://www.fifa55hd.com/contactus/sendmail_ajax";
$curl = curl_init();
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_REFERER, $url);
curl_setopt($curl, CURLOPT_URL, $url); 
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
$curl_response = curl_exec($curl);
curl_close($curl);
echo $curl_response;

?>