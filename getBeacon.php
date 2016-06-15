<html>
<body>
<h2>List of available Beacons </h2>

<?php

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
		$tab = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		foreach($beacon as $key => $value) {
    		echo "<p><h4> Beacon " . $value->id . "</h4></p>";
    		echo "<p>" . $tab ."Name: " . $value->name . "</p>";
    		echo "<p>" . $tab ."Major: " . $value->major . $tab ."Minor: " . $value->minor . "</p>";
    		echo "<p>" . $tab ."Latitude: " . $value-> latBeacon . $tab ."Longitude: " . $value-> lonBeacon . "</p>";
		}
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