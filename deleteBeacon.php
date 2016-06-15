<html>
<body>
<h2>List of available Beacons </h2>

<?php
	
	$tab = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	use GuzzleHttp\Psr7;
	use GuzzleHttp\Exception\RequestException;
	
// Instantiates a new guzzle client.
$client = new GuzzleHttp\Client();

try {
   // Send POST request to our server with the JSON beacon
   $response = $client->get('http://amaca.ga:8080/beacon');

	// DEBUG: 
   $body = $response->getBody();
   if($body) {
     	// Convert JSON string to Object
		$beacon = json_decode($body);

		// Loop through Objects
		$ids = array();
		foreach($beacon as $key => $value) {
			array_push($ids, $value->id);
			
    		echo "<b>ID: " . $value->id . "</b><br>";
    		echo $tab . "Name: " . $value->name . ",  " . 
    		"Major: " . $value->major . ",  " .  "Minor: " . $value->minor . "<br>";

		}
		
		print_r($ids);
   }
} catch (RequestException $e) {
	echo Psr7\str($e->getRequest());
   if ($e->hasResponse()) {
   	echo Psr7\str($e->getResponse());
   }
}

?>
</body>
</html>