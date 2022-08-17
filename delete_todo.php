<?php
// include the connection file
include './connection.php';

// Check if all the fields are set
if (isset($_POST['id'])) {
    // store the data in the variables
    $id = $_POST['id'];

    // Create the query
    $sql = "DELETE from todo where id = '$id'";
    // Run the query
    $result = mysqli_query($connect, $sql);

    // Check if the query was successful
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
