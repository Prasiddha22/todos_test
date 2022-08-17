<?php
// include the connection file
include './connection.php';

// Check if all the fields are set
if (isset($_POST['title']) && isset($_POST['description'])) {

    // store the data in the variables
    $title = $_POST['title'];
    $description = $_POST['description'];
    $date = date('Y-m-d H:i:s');

    // Create the query
    $sql = "INSERT into todo (title, description, date) values ('$title', '$description', '$date')";
    // Run the query
    $result = mysqli_query($connect, $sql);


    if ($result) {
        $resp = [
            'success' => true,
            'message' => 'Todo added successfully'
        ];
    } else {
        $resp = [
            'success' => false,
            'message' => 'Error adding todo'
        ];
    }
} else {
    $resp = [
        'success' => false,
        'message' => 'Title and description are required'
    ];
}

echo json_encode($resp);







// echo json_encode($resp);
