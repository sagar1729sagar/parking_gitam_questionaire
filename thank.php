
<?php
require_once('db_func.php');
// print_r($_POST);
// print_r($_GET);


  //setting data
  $living_outside_campus = (isset($_GET['living_outside_campus'])? $_GET['living_outside_campus'] : "No answer");
  $user = (isset($_GET['user'])?$_GET['user']:"No answer");
  $living = (isset($_POST['living'])?(($_POST['living'] != '')?$_POST['living']:"No answer"):"No answer");
  $area = (isset($_POST['Which_area_do_you_belongs_to'])?(($_POST['Which_area_do_you_belongs_to'] != '')?$_POST['Which_area_do_you_belongs_to']:"No answer"):"No answer");
  $pincode = (isset($_POST['Postal_PIN_code'])?(($_POST['Postal_PIN_code'] != '')?$_POST['Postal_PIN_code']:"No answer"):"No answer");
  $entry_gate = (isset($_POST['entrance'])?(($_POST['entrance'] != '')?$_POST['entrance']:"No answer"):"No answer");
  $exit_gate = (isset($_POST['exit'])?(($_POST['exit'] != '')?$_POST['exit']:"No answer"):"No answer");
  $commute_to_campus = (isset($_POST['commute_to_campus'])?(($_POST['commute_to_campus'] != '')?$_POST['commute_to_campus']:"No answer"):"No answer");
  $commute_from_campus = (isset($_POST['commute_from_campus'])?(($_POST['commute_from_campus'] != '')?$_POST['commute_from_campus']:"No answer"):"No answer");
  $pool_ride = (isset($_POST['pool_ride'])?(($_POST['pool_ride'] != '')?$_POST['pool_ride']:"No answer"):"No answer");
  $pool_often = (isset($_POST['pool_often'])?(($_POST['pool_often'] != '')?$_POST['pool_often']:"No answer"):"No answer");
  $drive_often =  (isset($_POST['drive_often'])?(($_POST['drive_often'] != '')?$_POST['drive_often']:"No answer"):"No answer");
  $entrance_time =  (isset($_POST['reach_time'])?(($_POST['reach_time'] != '')?$_POST['reach_time']:"No answer"):"No answer");
  $exit_time =  (isset($_POST['exit_time'])?(($_POST['exit_time'] != '')?$_POST['exit_time']:"No answer"):"No answer");
  $alight_point =  (isset($_POST['alighting_point'])?(($_POST['alighting_point'] != '')?$_POST['alighting_point']:"No answer"):"No answer");
  $drop_status =  (isset($_POST['drop_status'])?(($_POST['drop_status'] != '')?$_POST['drop_status']:"No answer"):"No answer");
  $parking_location =  (isset($_POST['parking_location'])?(($_POST['parking_location'] != '')?$_POST['parking_location']:"No answer"):"No answer");
  $vehicle_brand =  (isset($_POST['Vehicle_Brand'])?(($_POST['Vehicle_Brand'] != '')?$_POST['Vehicle_Brand']:"No answer"):"No answer");
  $vehicle_model =  (isset($_POST['Vehicle_Model'])?(($_POST['Vehicle_Model'] != '')?$_POST['Vehicle_Model']:"No answer"):"No answer");
  $registration_number =  (isset($_POST['Vehicle_Registration_Number'])?(($_POST['Vehicle_Registration_Number'] != '')?$_POST['Vehicle_Registration_Number']:"No answer"):"No answer");

  // writing to Database

  $sql = "INSERT INTO `data`(`user`, `living_outside_campus`, `living`, `area`, `pincode`, `entry_gate`, `exit_gate`,
          `commute_to_campus`, `commute_from_campus`, `pool_ride`, `pool_often`, `drive_often`, `entrance_time`, `exit_time`,
           `alight_point`, `drop_status`, `parking_location`, `vehicle_brand`, `vehicle_model`, `registration_number`)
           VALUES (:user,:living_outside_campus,:living,:area,:pincode,:entry_gate,:exit_gate,
             :commute_to_campus,:commute_from_campus,:pool_ride,:pool_often,:drive_often,:entrance_time,:exit_time,
             :alight_point,:drop_status,:parking_location,:vehicle_brand,:vehicle_model,:registration_number)";

  $stmt = $GLOBALS['pdo']->prepare($sql);
  $exec = $stmt->execute(array(':user' => $user , ':living_outside_campus' => $living_outside_campus , ':living' => $living ,
                              ':area' => $area , ':pincode' => $pincode , ':entry_gate' => $entry_gate , ':exit_gate' => $exit_gate ,
                             ':commute_to_campus' => $commute_to_campus ,':commute_from_campus' => $commute_from_campus ,
                             ':pool_ride' => $pool_ride , ':pool_often' => $pool_often , ':drive_often' => $drive_often ,
                             ':entrance_time' => $entrance_time , ':exit_time' => $exit_time ,':alight_point' => $alight_point ,
                             ':drop_status' => $drop_status , ':parking_location' => $parking_location ,
                             ':vehicle_brand' => $vehicle_brand , ':vehicle_model' => $vehicle_model , ':registration_number' => $registration_number));

 echo ($exec == 1)?"Your valuble input has been recorded succesfully":"Error recording data. We dont wanna miss your valuble input. Please try again";



 ?>
<html>
<body style='background-color:LightCyan;'>

<form action='trying.php' method='post'>
<h1 style='color:MidnightBlue; text-align:center; font-size:500%; font-family:verdana;'>Thank You</h1>
</form>
</body>
</html>
