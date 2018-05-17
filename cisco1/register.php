<?php 

include 'includes/head.php';


require_once 'core/functions.php';

// connection to the database
$connect = connectDB();

if (!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['password1']) && !empty($_POST['section'])) {
  # code...

  $email = addslashes($_POST['email']);
  $password = $_POST['password'];
  $password1 = $_POST['password1'];
  $section = addslashes($_POST['section']);


  if ($password === $password1) {
    # code...
    $password = hash_value('md5', $password, SECRET_KEY);
    
    register_admin($email, $password, $section);

  }else {
        echo "
            <div align='center'>
              <div class='col-md-6 alert alert-danger' >
              <p align='center'>PASSWORD MISMATCH</p>
              </div>
            </div>";
  }
 
}

 ?>

  <body class="bg-light">
  <!-- form to login to clearance side -->
  <div class="container" style="padding: 50px; padding-left: 20%;">
     <div class="col-md-6">
      <h4 class="text-danger">Register Here</h4>
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
    <label for="exampleInputPassword1">Confirm Password</label>
    <input type="password" name="password1" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
  </div>
  <div class="form-group">
    <label>Department / Section</label>
    <select class="form-control" name="section" required>
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
 
<!-- end of form -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>