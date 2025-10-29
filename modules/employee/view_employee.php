<?php
include('../../config.php');
include('../../includes/header.php');
include('../../includes/navbar.php');

$result = $conn->query("SELECT * FROM employees");
?>

<div class="container mt-4">
  <h3>Employee List</h3>
  <table class="table table-bordered mt-3">
    <thead class="table-dark">
      <tr>
        <th>ID</th><th>Name</th><th>Email</th><th>Department</th><th>Role</th><th>Salary</th><th>Joined</th><th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php while($row = $result->fetch_assoc()): ?>
        <tr>
          <td><?= $row['id'] ?></td>
          <td><?= $row['name'] ?></td>
          <td><?= $row['email'] ?></td>
          <td><?= $row['department'] ?></td>
          <td><?= $row['role'] ?></td>
          <td><?= $row['salary'] ?></td>
          <td><?= $row['date_joined'] ?></td>
          <td>
            <button class="btn btn-sm btn-primary leaveBtn" data-id="<?= $row['id'] ?>">Leave Request</button>
          </td>
        </tr>
      <?php endwhile; ?>
    </tbody>
  </table>
</div>

<!-- Leave Request Modal -->
<div class="modal fade" id="leaveModal" tabindex="-1">
  <div class="modal-dialog">
    <form id="leaveForm" class="modal-content">
      <div class="modal-header"><h5 class="modal-title">Leave Request</h5></div>
      <div class="modal-body">
        <input type="hidden" name="employee_id" id="employee_id">
        <div class="mb-3">
          <label>Leave Type</label>
          <input type="text" class="form-control" name="leave_type" required>
        </div>
        <div class="mb-3">
          <label>Start Date</label>
          <input type="date" class="form-control" name="start_date" required>
        </div>
        <div class="mb-3">
          <label>End Date</label>
          <input type="date" class="form-control" name="end_date" required>
        </div>
        <div class="mb-3">
          <label>Reason</label>
          <textarea class="form-control" name="reason" required></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Submit</button>
      </div>
    </form>
  </div>
</div>

<?php include('../../includes/footer.php'); ?>
