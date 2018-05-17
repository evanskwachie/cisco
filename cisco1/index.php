<?php
    
    include 'template/header.php';
    require 'libs/pages/student.php';

    $stud_id = 'PS/ITC/14/0016';
    $clearance_data = clearance_data($stud_id);
    $stud_clear = (count($clearance_data) != 0) ? $clearance_data[0] : [];

    function determine_color($data){
        if($data == 1){
            echo '&#9989;';
        } else{
            echo '&#10062;';
        }
    }

?>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><img src="static/img/index.png" class="" width="150"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown justify-content-end">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $stud_clear['stud_id']; ?></a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">password reset</a>
                    <a class="dropdown-item" href="#">logout</a>
                </div>
            </li>
        </ul>
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
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">Faculty Officer</th>
                <td><?php echo $stud_clear['faculty_rmks']; ?></td>
                <td>
                    <span style="font-size: 23px;">
                    <?php determine_color($stud_clear['faculty_officer']); ?>
                    </span>
                </td>
            </tr>
            <tr>
                <th scope="row">Department / Faculty Library</th>
                <td><?php echo $stud_clear['faculty_lib_rmks']; ?></td>
                <td>
                    <span style="font-size: 23px;">
                    <?php determine_color($stud_clear['faculty_lib']) ?>
                    </span>
                </td>
            </tr>
            <tr>
                <th scope="row">Main Library</th>
                <td><?php echo $stud_clear['main_lib_rmks']; ?></td>
                <td>
                    <span style="font-size: 23px;">
                    <?php determine_color($stud_clear['main_lib']); ?>
                    </span>
                </td>
            </tr>
            <tr>
                <th scope="row">Audit Section</th>
                <td><?php echo $stud_clear['audit_rmks'] ?></td>
                <td>
                    <span style="font-size: 23px;">
                    <?php determine_color($stud_clear['audit_section']) ?>
                    </span>
                </td>
            </tr>
            <tr>
                <th scope="row">Accounts Section</th>
                <td><?php echo $stud_clear['acc_rmks']; ?></td>
                <td>
                    <span style="font-size: 23px;">
                    <?php determine_color($stud_clear['acc_section']); ?>
                    </span>
                </td>
            </tr>
            <tr>
                <th scope="row">Sports Coach</th>
                <td><?php echo $stud_clear['sports_rmks']; ?></td>
                <td>
                    <span style="font-size: 23px;">
                    <?php determine_color($stud_clear['sports_coach']); ?>
                    </span>
                </td>
            </tr>
            <tr>
                <th scope="row">Hall Bursar</th>
                <td><?php echo $stud_clear['hall_rmks']; ?></td>
                <td>
                    <span style="font-size: 23px;">
                    <?php determine_color($stud_clear['hall_bursar']); ?>
                    </span>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<?php include 'template/footer.php'; ?>