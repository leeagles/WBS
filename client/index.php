<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-container">
  <h2>Sensors</h2>
  <p>List of sensor values</p>
  
  <?php include_once("../controller/read_sensors.php");
  echo $sensor_tbl;
  
   ?>
</div>

</body>
</html> 
