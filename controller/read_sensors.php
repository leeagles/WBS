<?php	
	/* connect to web api to collect data */
	$url = "http://localhost:8090/webapi/webapi.php?qry=a";
	$wclient = curl_init($url);
	curl_setopt($wclient, CURLOPT_RETURNTRANSFER, 1);
	$response = curl_exec($wclient);
	$result = json_decode($response);
	$sensor_data = $result->data;	
	//print_r($sensor_data);

	$sensor_tbl = '<table class="w3-table-all w3-card-4">
					<tr><th>Sensor Name</th><th>Status</th><th>Value</th></tr>';
	foreach ($sensor_data as $sensor)
	{
		$sensor_tbl .= '<tr class="w3-hover-green"><td>'.$sensor->sID.'</td><td>'.
		       $sensor->sStatus.'</td><td>'.$sensor->SValue.'</td></tr>';
	}	
	$sensor_tbl .= '</table>';
?>