<?php
include_once 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['dept'])) {
        // Decode JSON string into a PHP array
        $dept_array = json_decode($_POST['dept'], true);

        if (json_last_error() === JSON_ERROR_NONE) {
            // Prepare a query to fetch data based on department codes
            $placeholders = implode(',', array_fill(0, count($dept_array), '?'));
            $sql = "SELECT * FROM department WHERE dept_short_name IN ($placeholders)";
            
            // Prepare and execute SQL statement
            if ($stmt = mysqli_prepare($conn, $sql)) {
                $types = str_repeat('s', count($dept_array));
                mysqli_stmt_bind_param($stmt, $types, ...$dept_array);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);

                // Fetch all rows as an associative array
                $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
                mysqli_stmt_close($stmt);

                // Return fetched data as JSON response
                header('Content-Type: application/json');
                echo json_encode(['status' => 'success', 'receivedData' => $rows]);
            } else {
                header('Content-Type: application/json');
                echo json_encode(['status' => 'error', 'message' => 'SQL preparation failed.']);
            }
        } else {
            header('Content-Type: application/json');
            echo json_encode(['status' => 'error', 'message' => 'Invalid JSON data.']);
        }
    } else {
        header('Content-Type: application/json');
        echo json_encode(['status' => 'error', 'message' => 'No department data sent.']);
    }
} else {
    header('Content-Type: application/json');
    echo json_encode(['status' => 'error', 'message' => 'Invalid Request Method']);
}

mysqli_close($conn);
?>
