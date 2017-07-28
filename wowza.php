
<?php

	echo "hello\n";
	$ch = curl_init();
	echo "0\n";
	curl_setopt($ch, CURLOPT_URL, "https://api.cloud.wowza.com/api/v1/live_streams");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");

	echo "1\n";
	
	$headers = array();
	$headers[] = "Wsc-Api-Key: zrlWvVapoRIG50b6TufAqBrhBpjCGQhQsT4ttgiYE5gwKWhQgaswZGWtGFKL3630";
	$headers[] = "Wsc-Access-Key: pMSDulbhMeDND9QzzIHyQIBOuAJKUufgqFQ8xcjVIQUvM7DDGXTEJjzZGKzp3454";
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	echo "2\n";
	$result = curl_exec($ch);
	echo "3\n";
	if (curl_errno($ch)) {
		echo "error\n";
		echo 'Error:' . curl_error($ch);
	}
	else 
	{
		echo "ok";
		echo $result;
	}

	curl_close ($ch);

?>