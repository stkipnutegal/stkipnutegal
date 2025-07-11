<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if ($_POST['user'] == 'admin' && $_POST['pass'] == 'admin123') {
    $_SESSION['admin'] = true;
    header('Location: admin/index.php');
    exit;
  } else {
    $error = 'Login gagal';
  }
}
?>
<!DOCTYPE html><html><head><title>Login</title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"></head><body class="bg-light"><div class="container py-5"><h3>Login Admin</h3><?php if(isset($error)) echo "<div class='alert alert-danger'>$error</div>"; ?><form method="POST"><input type="text" name="user" class="form-control mb-2" placeholder="Username" required><input type="password" name="pass" class="form-control mb-2" placeholder="Password" required><button class="btn btn-primary">Login</button></form></div></body></html>