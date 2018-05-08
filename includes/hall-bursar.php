
<!-- section  -->
 <div class="container" style="margin-top: 20px;">
     <div class="alert alert-primary row justify-content-md-center" align="center">
    <p class="">Kindly leave a remark for he student not being cleared. Thank you</p>
  </div>
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
    <form>
    <tr>
      <th scope="row"><?php echo strtoupper($student_id) ?></th>
      <td><textarea style="height: 30px;"><?php echo $main_lib_rmks ?></textarea></td>
      <td><span style="font-size: 18px;">
        <select class="form-control">
          <?php

            if ($main_lib == 1) {
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

          <option value="<?php echo $val ?>"><?php echo $txt.' '.$color;?></option>
          <option value="<?php echo $val2 ?>"><?php echo $txt2.' '.$color2;?></option>
        </select></span></td>
      <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button></td>
    </tr>
  </form>
  </tbody>
</table>
 </div>

 
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
 