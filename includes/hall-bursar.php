
<!-- section  -->
 <div class="container-fluid" style="margin-top: 20px;">
<!--      <div class="alert alert-primary row justify-content-md-center" align="center">
    <p class="">Kindly leave a remark for he student not being cleared. Thank you</p>
  </div> -->
  <table class="table">
  <thead>
    <tr>
      <th scope="col">STUDENT ID</th>
      <th scope="col">REMARKS</th>
      <th scope="col">CLEARED</th>
      <th scope="col">UPDATE</th>
      <!-- <th scope="col">Handle</th> -->
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo strtoupper($stud_id) ?></th>
      <td><?php 

        if (is_null($hall_rmks)) {
          # code...
          $hall_rmks = 'N/L';
        }

      echo $hall_rmks ?>  </td>
      <td><span style="font-size: 18px;">
          <?php

            if ($hall_bursar == 1) {
              # code...
              $txt = 'Yes';
              $val = 1;
              $color = '&#9989;';

              $txt2 = 'No';
              $val2 = 0;
              $color2 = '&#10062;';
            }else{

               $txt = 'No';
               $val = 0;
               $color = '&#10062;';

               $txt2 = 'Yes';
               $val2 = 1;
              $color2 = '&#9989;';

            }

          ?>

          <?php echo $txt.' '.$color;?>
          
      <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Update</button></td>
    </tr>
  </tbody>
</table>
 </div>
 
  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit and Update Clearance</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form method="POST" action="">
  <div class="form-group">
    <label for="exampleInputEmail1">STUDENT ID</label>
    <input type="text" name="stud_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter student id" required value="<?php echo strtoupper($stud_id) ?>">
    <small id="emailHelp" class="form-text text-muted">Update when neccessary.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Remarks</label>
    <textarea class="form-control" id="exampleInputPassword1" placeholder="remarks" name="rmks" required><?php echo $hall_rmks ?></textarea>
  </div>
  <div class="form-group">
    <label>Cleared</label>
     <select class="form-control" name="val">
          <option value="<?php echo $val ?>"><?php echo $txt.' '.$color;?></option>
          <option value="<?php echo $val2 ?>"><?php echo $txt2.' '.$color2;?></option>
        </select>
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="update_btn">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>

 