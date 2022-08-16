<?php
// include the connection file
include './connection.php';

// query to select the todo
$sql = "SELECT * FROM todo";

// Execute the query
$result = mysqli_query($connect, $sql);
// Create a variable array to store the retrieved data
$todo_arr = [];

// Loop through the result and store the data in the array
while ($row[] = mysqli_fetch_assoc($result)) {
    // Store the data in the array
    $todo_arr = $row;
}

$resp = [
    'success' => true,
    'data' => $todo_arr
];

echo json_encode($resp);
