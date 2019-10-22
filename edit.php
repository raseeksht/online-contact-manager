<?php
include 'db/conn.php';
include 'layout/header.php';
?>
<h1 class="text-center">Edit Logs</h1>
<div class="table-load"></div>

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
       
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-primary" id='save'>Save changes</button>
        <button type="button" class="btn btn-danger" id='delete'>Delete</button>
      </div>
    </div>
  </div>
</div>
<div class="alert"></div>
<?php
include 'layout/footer.php';
?>