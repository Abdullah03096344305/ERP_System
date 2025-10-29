<?php
include('../../config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $employee_id = $_POST['employee_id'] ?? '';
    $leave_type = $_POST['leave_type'] ?? '';
    $start_date = $_POST['start_date'] ?? '';
    $end_date = $_POST['end_date'] ?? '';
    $reason = $_POST['reason'] ?? '';

    // Check if any field is missing
    if (empty($employee_id) || empty($leave_type) || empty($start_date) || empty($end_date) || empty($reason)) {
        echo "missing_fields";
        exit;
    }

    $stmt = $conn->prepare("INSERT INTO leave_applications (employee_id, leave_type, start_date, end_date, reason)
                            VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("issss", $employee_id, $leave_type, $start_date, $end_date, $reason);

    if ($stmt->execute()) {
        echo "success";
    } else {
        echo "error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "invalid_request";
}
?>
