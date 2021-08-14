<?php

header('Content-Type: application/json');

include_once('Model.php');
include_once('DataObject.php');
include_once('ModelObject.php');

DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', '');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'test');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die("{'ResponseCode':'0', 'ResponseMessage': 'Could not connect to MySQL - ".mysqli_connect_error()."'}");

$test_model_object1 = new ModelObject(7, "fun", "stuff", "everyday", 1, 2, 3, date("Y/m/d"));
$test_model_object2 = new ModelObject(8, "wow", "this", "rocks", 7, 8, 9, date("Y/m/d"));

if (mysqli_connect_error()) {
    echo '{"ResponseCode":0, "ResponseMessage": "Connection Failed"}';
    exit();
}

$query = "SELECT * FROM somedata;";
$data_model_array = array();
$result = $dbc->query($query);

if ($result->num_rows > 0){
    
    while($obj = $result->fetch_object()) {
        $temp_data_model = new Model($obj->idx, $obj->data_00, $obj->data_01, $obj->data_02,
									$obj->data_alpha, $obj->data_beta, $obj->data_gamma, $obj->date);
        $data_model_array[] = $temp_data_model;
    }

	$test_json1 = json_encode($test_model_object1);
	$test_json2 = json_encode($test_model_object2);
    $test_json_db1 = json_encode($data_model_array[0]);
    $test_json_db2 = json_encode($data_model_array[1]);
    $test_json_db3 = json_encode($data_model_array[2]);
    $test_json_db4 = json_encode($data_model_array[3]);
    $test_json_db5 = json_encode($data_model_array[4]);
    $test_json_db6 = json_encode($data_model_array[5]);
    
    
    echo "{'ResponseCode':'1', 'ResponseBody':";
	echo "'[";
    echo $test_json1 . ',';
    echo $test_json2 . ',';
    echo $test_json_db1 . ',';
    echo $test_json_db2 . ',';
    echo $test_json_db3 . ',';
    echo $test_json_db4 . ',';
    echo $test_json_db5 . ',';
    echo $test_json_db6 . "]'";
    
    $result->close();
    $dbc->close();
}
?>