
<?php

$ch = curl_init();

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://api-sandbox.cloud.wowza.com/api/v1/live_streams?page=https%3A%2F%2Fapi.cloud.wowza.com%2Fapi%2Fv1%2Flive_streams%2F");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");


$headers = array();
$headers[] = "Accept: application/json";
$headers[] = "Wsc-Api-Key: zrlWvVapoRIG50b6TufAqBrhBpjCGQhQsT4ttgiYE5gwKWhQgaswZGWtGFKL3630";
$headers[] = "Wsc-Access-Key: pMSDulbhMeDND9QzzIHyQIBOuAJKUufgqFQ8xcjVIQUvM7DDGXTEJjzZGKzp3454";
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
else echo json_encode($result);
curl_close ($ch);

?>