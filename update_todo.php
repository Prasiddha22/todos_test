<?php

include './connection.php';


if (isset($_POST['id']) && isset($_POST['title']) && isset($_POST['description'])) {

    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $date = date('Y-m-d H:i:s');

    $sql = "UPDATE todo set title = '$title', description = '$description', date = '$date' where id = '$id'";
    $result = mysqli_query($connect, $sql);


    if ($result) {
        $resp = [
            'success' => true,
            'message' => 'Todo updated successfully'
        ];
    } else {
        $resp = [
            'success' => false,
            'message' => 'Error updating todo'
        ];
    }
} else {
    $resp = [
        'success' => false,
        'message' => 'Id, title and description are required'
    ];
}

echo json_encode($resp);







// echo json_encode($resp);
