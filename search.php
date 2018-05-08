<?php include 'includes/head.php';

@session_start();

require_once 'core/functions.php';

$connected = connectDB();

$query = "SELECT * FROM clear";

$run = $connected->query($query);

if ($run) {
  # code...
  while ($data = mysqli_fetch_assoc($run)) {
          # code...
          $student_id = $data['stud_id'];
          $main_lib = $data['main_lib'];
          $main_lib_rmks = $data['main_lib_rmks'];

          // echo $main_lib;

        
        }
}


//search for students

  if (isset($_POST['submit']) && !empty($_POST['search_text'])) {
    # code...
    
  }else {

    echo "please enter a search query";
  }


?>

 <body>
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="img/index.png" width="150">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <?php
if (authenticate_user()) {
  # code...
    // echo $_SESSION['section'];

    switch ($_SESSION['section']) {
      case 1:
        # code...
       $section = ucfirst('Faculty Officer Section');
        $layout = 'includes/falculty-officer.php';
        break;

      case 2:
        # code...
       $section = ucfirst('Faculty Library Section');
        $layout = 'includes/department-library.php';
        break;

       case 3:
        # code...
       $section = ucfirst('Main Library Section');
       $layout = 'includes/main_lib.php';
        break;

      case 4:
        # code...
       $section = ucfirst('Audit Section');
        $layout = 'includes/audit-section.php';
        break;
      
      case 5:
        # code...
       $section = ucfirst('Account Section');
        $layout = 'includes/accounts-section.php';
        break;

      case 6:
        # code...
       $section = ucfirst('Sports Coach Office Section');
        $layout = 'includes/sports-coach-office.php';
        break;

      case 7:
        # code...
       $section = ucfirst('Hall Bursar Section');
       $layout = 'includes/hall-bursar.php';
        break;

      default:
        # code...
        break;
    }
}else{

  redirect('admin.php');

}

?>
  
        <a class="nav-link disabled" href="#" align="center"><h5><?php echo $section ?></h5></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php echo $_SESSION['username']; ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Reset password</a>
          <a class="dropdown-item" href="#">Logout</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" method="POST" action="">
      <!-- <span class="input-group-addon">Search</span> -->
      <input class="form-control mr-sm-2" type="text" placeholder="Search here by ---------->" name="search_text" aria-label="Search">
      <select class="btn btn-outline-primary">
        <option value="stud_id">student id</option>
        <option value="prog">programme</option>
        <!-- <option></option> -->
      </select>
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit">Search</button>
    </form>
  </div>
</nav>


  <!-- section for displaying students -->
  <section class="container-fluid" style="margin-top: 20px;">
    
  </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>