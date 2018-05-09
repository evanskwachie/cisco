<?php include 'includes/head.php';
  
  require_once 'core/functions.php';

  $connected = connectDB();

  $stud_id = 'PS/ITC/14/0016';

  // query for clearance results with index number;
  $query = "SELECT * FROM clear WHERE stud_id = '{$stud_id}'";

  $run = $connected->query($query);

  if ($run) {
    # code...
      while ($row = mysqli_fetch_assoc($run)) {
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

           if ($main_lib == 1) {
              # code...
              $m_color = '&#9989;';

            }else{
               $m_color = '&#10062;';

            }

            if ($faculty_officer == 1) {
              # code...
              $color = '&#9989;';

            }else{

               $fa_color = '&#10062;';

            }

            if ($faculty_lib == 1) {
              # code...
              // $txt = 'Yes';
              // $val = 1;
              $f_color = '&#9989;';

              // $txt2 = 'No';
              // $val2 = 0;
              // $color2 = '&#10062;';
            }else{

               // $txt = 'No';
               // $val = 0;
               $f_color = '&#10062;';

              //  $txt2 = 'Yes';
              //  $val2 = 1;
              // $color2 = '&#9989;';

            }

            if ($audit_section == 1) {
              # code...
              // $txt = 'Yes';
              // $val = 1;
              $a_color = '&#9989;';

              // $txt2 = 'No';
              // $val2 = 0;
              // $color2 = '&#10062;';
            }else{

               // $txt = 'No';
               // $val = 0;
               $a_color = '&#10062;';

              //  $txt2 = 'Yes';
              //  $val2 = 1;
              // $color2 = '&#9989;';

            }

             if ($acc_section == 1) {
              # code...
              // $txt = 'Yes';
              // $val = 1;
              $acc_color = '&#9989;';

              // $txt2 = 'No';
              // $val2 = 0;
              // $color2 = '&#10062;';
            }else{

               // $txt = 'No';
               // $val = 0;
               $acc_color = '&#10062;';

              //  $txt2 = 'Yes';
              //  $val2 = 1;
              // $color2 = '&#9989;';

            }

            if ($sports_coach == 1) {
              # code...
              // $txt = 'Yes';
              // $val = 1;
              $s_color = '&#9989;';

              // $txt2 = 'No';
              // $val2 = 0;
              // $color2 = '&#10062;';
            }else{

               // $txt = 'No';
               // $val = 0;
               $s_color = '&#10062;';

              //  $txt2 = 'Yes';
              //  $val2 = 1;
              // $color2 = '&#9989;';

            }

            if ($hall_bursar == 1) {
              # code...
              // $txt = 'Yes';
              // $val = 1;
              $h_color = '&#9989;';

              // $txt2 = 'No';
              // $val2 = 0;
              // $color2 = '&#10062;';
            }else{

               // $txt = 'No';
               // $val = 0;
               $h_color = '&#10062;';

              //  $txt2 = 'Yes';
              //  $val2 = 1;
              // $color2 = '&#9989;';

            }
  }


 ?>

  <body>
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="img/index.png" class="" width="150">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
     <!--  <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li> -->
      <li class="nav-item dropdown justify-content-end">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Ps/itc/14/0016
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">password reset</a>
          <a class="dropdown-item" href="#">logout</a>
         <!--  <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div> -->
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li> -->
    </ul>
    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
</nav>

 <!-- section  -->
 <div class="container" style="margin-top: 20px;">
     <div class="alert alert-primary row justify-content-md-center" align="center">
    <p class="">Kindly note that this is a provisional claerance certficate. See any of the department / section for ny rectification and correction</p>
  </div>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">DEPARTMENT / SECTION</th>
      <th scope="col">REMARKS</th>
      <th scope="col">CLEARED</th>
      <!-- <th scope="col">Handle</th> -->
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Faculty Officer</th>
      <td><?php echo $faculty_rmks ?></td>
      <td><span style="font-size: 23px;"><?php echo $fa_color ?></span></td>
      <!-- <td>@mdo</td> -->
    </tr>
    <tr>
      <th scope="row">Department / Faculty Library</th>
     <td><?php echo $faculty_lib_rmks ?></td>
      <td><span style="font-size: 23px;"><?php echo $f_color ?></span></td>
      <!-- <td>@fat</td> -->
    </tr>
    <tr>
      <th scope="row">Main Library</th>
      <td><?php echo $main_lib_rmks ?></td>
     <td><span style="font-size: 23px;"><?php echo $m_color ?></span></td>
      <!-- <td>@twitter</td> -->
    </tr>
    <tr>
      <th scope="row">Audit Section</th>
      <td><?php echo $audit_rmks ?></td>
     <td><span style="font-size: 23px;"><?php echo $a_color ?></span></td>
      <!-- <td>@twitter</td> -->
    </tr>
    <tr>
      <th scope="row">Accounts Section</th>
      <td><?php echo $acc_rmks ?></td>
     <td><span style="font-size: 23px;"><?php echo $acc_color ?></span></td>
      <!-- <td>@twitter</td> -->
    </tr>
    <tr>
      <th scope="row">Sports Coach</th>
     <td><?php echo $sports_rmks ?></td>
      <td><span style="font-size: 23px;"><?php echo $s_color ?></span></td>
      <!-- <td>@twitter</td> -->
    </tr>
    <tr>
      <th scope="row">Hall Bursar</th>
     <td><?php echo $hall_rmks ?></td>
      <td><span style="font-size: 23px;"><?php echo $h_color ?></span></td>
      <!-- <td>@twitter</td> -->
    </tr>
  </tbody>
</table>
 </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>