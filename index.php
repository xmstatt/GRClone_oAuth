<?php
header("Access-Control-Allow-Origin: *");
$data = 'client_id=' . 'YOURCLIENTID' . '&' .
        'client_secret=' . 'YOURSECRETKEY' . '&' .
        'code=' . urlencode($_GET['code']);
$ch = curl_init('https://github.com/login/oauth/access_token');
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
preg_match('/access_token=([0-9a-f]+)/', $response, $out);
echo $out[1];
curl_close($ch);


?>
