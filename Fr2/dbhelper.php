<?php
	


$conn = new mysqli("localhost", "root", "", "reviews");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  
}

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
  if (isset($_POST["stars"])){
    insert_reviews_makatete_hills($_POST["stars"]);
  }
}

function insert_reviews_makatete_hills($star){
  global $conn;
  $sql = "INSERT INTO makatete_hills VALUES ('$star')";
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  header("Location: " . $_SERVER['PHP_SELF']);
}

// var_dump(get_makatete_hills_reviews());

function get_makatete_hills_reviews(){
  global $conn;
  $sql = "SELECT * FROM makatete_hills";
  $result = $conn->query($sql);
  $num_of_star = 0;
  $num_of_data = 0;
  while ($value = $result->fetch_assoc()){
    $num_of_star += $value["stars"];
    $num_of_data += 1;
  }
  $final_result = round($num_of_star/$num_of_data, 1);
  return $final_result;
}

?>