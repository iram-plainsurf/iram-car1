<?php
//include('assets/php/config.php');
$connect = mysqli_connect("localhost", "root", "", "cardb"); //Connect PHP to MySQL Database
$query = '';
$table_data = '';
/*$filename = "cardb.json";*/
if (isset($_POST['import'])) {
    copy($_FILES['jsonFile']['tmp_name'], '../jsonFiles/' . $_FILES['jsonFile']['name']);
    $data = file_get_contents('../jsonFiles/' . $_FILES['jsonFile']['name']); //Read the JSON file in PHP
    $array = json_decode($data, true); //Convert JSON String into PHP Array
    foreach ($array as $row) { //Extract the Array Values by using Foreach Loop
        $query .= "INSERT INTO customers(c_id, name, address, contact, car_model, price, payment) VALUES ('".$row["c_id"]."','".$row["name"]."', '".$row["address"]."','".$row["contact"]."','".$row["car_model"]."', '".$row["price"]."','".$row["payment"]."'); ";  // Make Multiple Insert Query 
        $table_data .= '
            <tr>
       <td>' . $row["c_id"] . '</td>
       <td>' . $row["name"] . '</td>
       <td>' . $row["address"] . '</td>
       <td>' . $row["contact"] . '</td>
       <td>' . $row["car_model"] . '</td>
       <td>' . $row["price"] . '</td>
       <td>' . $row["payment"] . '</td>
      </tr>
           '; //Data for display on Web page
    }
    if (mysqli_multi_query($connect, $query)) { //Run Mutliple Insert Query
        header('location:../customersDashUD.php',301);
    }
  }
?>