<!DOCTYPE html>
<html>
<head>
    <!-- Load file CSS Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">

    <!-- Load file library Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Load file library JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>
<body>
<div class="container">
<div class="col-md-9">
<h3>Update Data</h3>
<hr>
<form method="post" action="<?php echo base_url(); ?>index.php/Complaint/update" enctype="multipart/form-data" id="form1"> 
<input type="hidden" name="ticket_id" value="<?php echo $complaint->ticket_id; ?>">
<div class="form-group">
	<label>Nama</label>
	<input type="text" name="name" class="form-control" value="<?php echo $complaint->name; ?>">
</div>
<br>
<div class="form-group">
	<label>Deskripsi</label>
	<textarea name="description" id="autoresizing" class="form-control"><?php echo $complaint->description; ?></textarea>
</div>
<br>
<div class="form-group">
<label>Kategori</label>
<select name="category" class="js-example-basic-single">
<?php foreach ($category as $item){ ?>
	<option value="<?php echo $item->category_id; ?>" <?php if($item->category_id == $complaint->category_id){ echo "selected";} ?>><?php echo $item->category; ?></option>
<?php } ?>
</select>
</div>
<br>
<div class="form-group">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> Upload Gambar </button> <!-- Modal -->
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                
Uploading a new photo</h5> <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="body-desc"> 
It will be easier for your friends to recognize you if you upload your real photo. You can upload the image in JPG, GIF or PNG format. </p>
                <input type="file" name="image" accept="image/*" onchange="loadFile(event)">
                <br>
                <img id="output" width="460" height="270"/>
            </div>
            <div class="modal-footer">
                <p class="footer-title">
If you're having problems uploading, try choosing a smaller photo.</p>
            </div>
        </div>
    </div>
</div>
<br>
<input type="submit" value="Kirim" class="btn btn-success">
</form>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready( function () {
      $('#ticket-list').DataTable();
  } );
</script>
<script>
var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
</script>
<script>
	    $('#autoresizing').on('input', function () {
            this.style.height = '50px';
              
            this.style.height = 
                    (this.scrollHeight) + 'px';
        });
	</script>
<script>
$(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>
</body>
</html>
