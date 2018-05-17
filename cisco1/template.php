<?php include 'includes/head.php';

@session_start();

require_once 'core/functions.php';

$connected = connectDB();

//search for students

  if (isset($_POST['submit']) && !empty($_POST['search_text'])) {
    # code...
 
      # code...
  

        $search_text = $_POST['search_text'];


        $search_by = $_POST['search_by'];


       if ($search_by == 'stud_id') {
         # code...

        //query for the database table
        $qry = "SELECT * FROM clear WHERE stud_id LIKE '".$search_text."' ";

        $result = $connected->query($qry);

       $num = $result->num_rows;


        if ($num > 0){
          # code...

           while ($row = mysqli_fetch_assoc($result)) {
             # code...

            $stud_id = $row['stud_id'];

            // main library
            $main_lib = $row['main_lib'];
            $main_lib_rmks = $row['main_lib_rmks'];

            // faculty officer
            $faculty_officer = $row['faculty_officer'];
            $faculty_rmks = $row['faculty_rmks'];

            // faculty library
            $faculty_lib = $row['faculty_lib'];
            $faculty_lib_rmks = $row['faculty_lib_rmks'];
            
            // audit section
            $audit_section = $row['audit_section'];
            $audit_rmks = $row['audit_rmks'];

            // accounts section
            $acc_section = $row['acc_section'];
            $acc_rmks = $row['acc_rmks'];

            // sports coach office
            $sports_coach = $row['sports_coach'];
            $sports_rmks = $row['sports_rmks'];

            // hal bursar
            $hall_bursar = $row['hall_bursar'];
            $hall_rmks = $row['hall_rmks'];

           }

           //switch to choose results layout base on the office logged in
           switch ($_SESSION['section']) {
                case 1:
                  # code...
                 
                  $layout = 'includes/faculty-officer.php';
                  break;

                case 2:
                  # code...
                 
                  $layout = 'includes/department-library.php';
                  break;

                 case 3:
                  # code...
                
                 $layout = 'includes/main_lib.php';
                  break;

                case 4:
                  # code...
                  $layout = 'includes/audit-section.php';
                  break;
                
                case 5:
                  # code...
                  $layout = 'includes/accounts-section.php';
                  break;

                case 6:
                  # code...
                  $layout = 'includes/sports-coach-office.php';
                  break;

                case 7:
                  # code...
                 $layout = 'includes/hall-bursar.php';
                  break;

                default:
                  # code...
                  break;
              }

           $res = "
             <span class='alert alert-success'> Query found</span>



           ";

        }else {
          $res = "<span class='alert alert-danger'>No query found</span>";

      }

       }else {

         $res = "<span class='alert alert-danger'> searching by other goes here</span>";

       }    

  }else {

    $res = "<span class='alert alert-danger'>please enter a search query</span>";
  }

  // for updating student's clearance form
if (isset($_POST['update_btn'])) {
  # code...
  if (!empty($_POST['stud_id']) && !empty($_POST['rmks'])) {
    # code...
    $stud_id = $_POST['stud_id'];
    $rmks = addslashes($_POST['rmks']);
    $val = $_POST['val'];

    $section = $_SESSION['section'];

    update_clearance($stud_id, $rmks, $val, $section);

    // echo $stud_id.'<br>'.$rmks.'<br>'.$val.'<br>'.$section;
    

  }
  
  
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
        break;

      case 2:
        # code...
       $section = ucfirst('Faculty Library Section');
        break;

       case 3:
        # code...
       $section = ucfirst('Main Library Section');
        break;

      case 4:
        # code...
       $section = ucfirst('Audit Section');
        break;
      
      case 5:
        # code...
       $section = ucfirst('Accounts Section');
        break;

      case 6:
        # code...
       $section = ucfirst('Sports Coach Office Section');
        break;

      case 7:
        # code...
       $section = ucfirst('Hall Bursar Section');
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
          <a class="dropdown-item" href="core/logout.php">Logout</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" method="POST" action="">
      <!-- <span class="input-group-addon">Search</span> -->
      <input class="form-control mr-sm-2" type="text" placeholder="Search here by ---------->" name="search_text" aria-label="Search">
      <select class="btn btn-outline-primary" name="search_by">
        <option value="stud_id">student id</option>
        <option value="prog">programme</option>
        <!-- <option></option> -->
      </select>
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit">Search</button>
    </form>
  </div>
</nav>

<!-- section  -->
 <div class="container" style="margin-top: 20px;">
     <div class="alert alert-primary row justify-content-md-center" align="center">
    <p class="">Kindly leave a remark for the student not being cleared. Thank you</p>
  </div>
  <!-- section for displaying students -->
  <section class="container-fluid" style="margin-top: 20px;">
    <div align="center">  
    <?php echo $res ?>

    <?php include $layout; ?>
    </div>
  </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>