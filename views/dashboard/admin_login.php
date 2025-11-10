<?php
require_once '../../config.php';
require_once '../../helpers/PersistanceManager.php';
require_once '../../helpers/SessionManager.php';

$session = new SessionManager();

// Check if admin/operator
if (!$session->isKeySet('user_id') || $session->getAttribute('permission') != 'operator') {
    header('Location: ../../auth/login.php');
    exit;
}

// Fetch all users
$prmang = new PersistanceManager();
$query = "SELECT id, username, email, permission, is_active, created_at FROM users ORDER BY id DESC";
$users = $prmang->run($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin - Users</title>
  <link rel="stylesheet" href="../../assets/vendor/css/core.css">
  <link rel="stylesheet" href="../../assets/vendor/css/theme-default.css">
  <link rel="stylesheet" href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css">
  <link rel="stylesheet" href="../../assets/vendor/libs/bootstrap-icons/bootstrap-icons.css">
  <link rel="stylesheet" href="../../assets/css/demo.css">
  <link rel="stylesheet" href="../../assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css">
</head>
<body>
  <!-- Sidebar & Navbar here if needed -->

  <div class="container-xxl flex-grow-1 container-p-y mt-3">

    <h4 class="fw-bold py-3 mb-4">Users Management</h4>

    <div class="card">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="card-title mb-0">All Users</h5>
        <a href="add-user.php" class="btn btn-primary btn-sm">Add New User</a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-hover table-striped">
            <thead class="table-dark">
              <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Permission</th>
                <th>Status</th>
                <th>Created At</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php if ($users): ?>
                <?php foreach ($users as $user): ?>
                  <tr>
                    <td><?php echo htmlspecialchars($user['id']); ?></td>
                    <td><?php echo htmlspecialchars($user['username']); ?></td>
                    <td><?php echo htmlspecialchars($user['email']); ?></td>
                    <td>
                      <span class="badge bg-<?php echo $user['permission']=='doctor'?'info':($user['permission']=='operator'?'warning':'secondary'); ?>">
                        <?php echo ucfirst($user['permission']); ?>
                      </span>
                    </td>
                    <td>
                      <span class="badge bg-<?php echo $user['is_active'] ? 'success' : 'danger'; ?>">
                        <?php echo $user['is_active'] ? 'Active' : 'Inactive'; ?>
                      </span>
                    </td>
                    <td><?php echo date('d-m-Y H:i', strtotime($user['created_at'])); ?></td>
                    <td>
                      <a href="edit-user.php?id=<?php echo $user['id']; ?>" class="btn btn-sm btn-outline-primary">
                        <i class="bi bi-pencil"></i>
                      </a>
                      <a href="delete-user.php?id=<?php echo $user['id']; ?>" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure?');">
                        <i class="bi bi-trash"></i>
                      </a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              <?php else: ?>
                <tr>
                  <td colspan="7" class="text-center">No users found</td>
                </tr>
              <?php endif; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>

  <script src="../../assets/vendor/libs/jquery/jquery.js"></script>
  <script src="../../assets/vendor/libs/bootstrap/bootstrap.js"></script>
  <script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="../../assets/vendor/libs/datatables/jquery.dataTables.js"></script>
  <script src="../../assets/vendor/libs/datatables-bs5/datatables.bootstrap5.js"></script>

  <script>
    $(document).ready(function() {
      $('.table').DataTable({
        pageLength: 10,
        lengthMenu: [5, 10, 25, 50]
      });
    });
  </script>
</body>
</html>
