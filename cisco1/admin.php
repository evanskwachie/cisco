<?php

   include 'template/header.php';
    require 'libs/pages/admin.php';


    define('SECRET_KEY', 'n1c0l@e^@nzch@rseuk1z1toqwertyas');
    

    if (!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['section'])) {
      # code...
      $username = addslashes($_POST['email']);
      $password = $_POST['password'];
      $section = $_POST['section'];

      authenticate_user($username, $password, $section);
}

?>
  <body class="bg-light">

  <!-- form to login to clearance side -->
  <div class="container" style="padding: 50px; padding-left: 20%;">
     <div class="col-md-6">
      <h4 class="text-danger">Login Here</h4>
     <form method="POST" action="">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
  </div>
  <div class="form-group">
    <label>Department / Section</label>
    <select class="form-control" name="section">
      <option value="1">Faculty Officer</option>
      <option value="2">Faculty Library</option>
      <option value="3">Main Library</option>
      <option value="4">Audit Section</option>
      <option value="5">Acconts Section</option>
      <option value="6">Sports Coach Office</option>
      <option value="7">Hall Bursar</option>
    </select>
  </div>
  <button type="submit" class="btn-lg btn-block btn-primary">Submit</button>
</form>
  </div>
  </div>
 
<?php include 'template/footer.php'; ?>