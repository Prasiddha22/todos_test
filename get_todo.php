<?php
// include the connection file
include './connection.php';


$sql = "SELECT * FROM todo";
$result = mysqli_query($connect, $sql);

$todo_arr = [];

while ($row[] = mysqli_fetch_assoc($result)) {
    $todo_arr = $row;
}

$resp = [
    'success' => true,
    'data' => $todo_arr
];

echo json_encode($resp);
