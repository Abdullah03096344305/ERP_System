<?php
include('../../config.php');
include('../../includes/header.php');
include('../../includes/navbar.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $department = $_POST['department'];
    $role = $_POST['role'];
    $salary = $_POST['salary'];
    $date_joined = $_POST['date_joined'];

    $sql = "INSERT INTO employees (name, email, department, role, salary, date_joined)
            VALUES ('$name', '$email', '$department', '$role', '$salary', '$date_joined')";
    if ($conn->query($sql)) {
        echo "<div class='alert alert-success text-center'>Employee Added Successfully!</div>";
    } else {
        echo "<div class='alert alert-danger text-center'>Error: " . $conn->error . "</div>";
    }
}
?>

<div class="container mt-4">
  <h3>Add New Employee</h3>
  <form method="POST" class="mt-3">
    <div class="mb-3">
      <label>Name</label>
      <input type="text" class="form-control" name="name" required>
    </div>
    <div class="mb-3">
      <label>Email</label>
      <input type="email" class="form-control" name="email" required>
    </div>
    <div class="mb-3">
      <label>Department</label>
      <input type="text" class="form-control" name="department" required>
    </div>
    <div class="mb-3">
      <label>Role</label>
      <input type="text" class="form-control" name="role" required>
    </div>
    <div class="mb-3">
      <label>Salary</label>
      <input type="number" class="form-control" name="salary" required>
    </div>
    <div class="mb-3">
      <label>Date Joined</label>
      <input type="date" class="form-control" name="date_joined" required>
    </div>
    <button type="submit" class="btn btn-primary">Add Employee</button>
  </form>
</div>

<?php include('../../includes/footer.php'); ?>
