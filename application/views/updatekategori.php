<?php
$this->load->view('include/loader');
?>
<?php $this->load->view('include/sidebar');?>
<!DOCTYPE html>
<html>
<head>
<style>
       body {
    padding-top: 44px;
    padding-bottom: 44px;
}

/* Tablet */
@media (min-width:600px) {
    body {
        padding-top: 50px;
        padding-bottom: 50px;
    }
}

/* Desktop */
@media (min-width:900px) {
    body {
        padding-top: 55px;
        padding-bottom: 55px;
    }
}


    </style>
    <!-- Load file CSS Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">
    <div class="col-md-9">
<h3>Tambah Data</h3>
<hr>
<form method="post" action="<?php echo base_url(); ?>/category/update" id="form1"> 
<input type="hidden" name="category_id" value="<?php echo $category->category_id; ?>">
<div class="form-group">
	<label>Nama</label>
	<input type="text" name="category" class="form-control" value="<?php echo $category->category; ?>">
</div>
<br>


    </div>
</div>
<br>
<input type="submit" value="Kirim" class="btn btn-success">
</form>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</body>
</html>
