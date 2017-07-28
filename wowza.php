
<?php


	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL, "https://api.cloud.wowza.com/api/v1/live_streams");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");


	$headers = array();
	$headers[] = "Wsc-Api-Key: zrlWvVapoRIG50b6TufAqBrhBpjCGQhQsT4ttgiYE5gwKWhQgaswZGWtGFKL3630 ";
	$headers[] = "Wsc-Access-Key: pMSDulbhMeDND9QzzIHyQIBOuAJKUufgqFQ8xcjVIQUvM7DDGXTEJjzZGKzp3454";
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

	$result = curl_exec($ch);
	if (curl_errno($ch)) {
		echo 'Error:' . curl_error($ch);
	}
	else echo $result;

	curl_close ($ch);

?>