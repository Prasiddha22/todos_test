<?php
// include the connection file
include './connection.php';


if (isset($_POST['id'])) {

    $id = $_POST['id'];

    $sql = "DELETE from todo where id = '$id'";
    $result = mysqli_query($connect, $sql);


    if ($result) {
        $resp = [
            'success' => true,
            'message' => 'Todo deleted successfully'
        ];
    } else {
        $resp = [
            'success' => false,
            'message' => 'Error deleting todo'
        ];
    }
} else {
    $resp = [
        'success' => false,
        'message' => 'Id is required'
    ];
}

echo json_encode($resp);







// echo json_encode($resp);
