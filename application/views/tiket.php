<!DOCTYPE html>
<html>
<head>
    <!-- Load file CSS Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <!-- Load file library Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Load file library JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/sidebar.css">
    <style>
       body {
    padding-top: 54px;
    padding-bottom: 54px;
}

/* Tablet */
@media (min-width:600px) {
    .body {
        padding-top: 70px;
        padding-bottom: 70px;
    }
}

/* Desktop */
@media (min-width:900px) {
    body {
        padding-top: 75px;
        padding-bottom: 75px;
    }
}
    </style>
</head>
<body></body>
<?php
$this->load->view('include/sidebar');
?>
<table class="table table-striped table-bordered border-dark" id="ticket-list">
    <thead>
  <tr>
      <th> No</th> <th>ID Tiket</th> <th>Deskripsi</th> <th>Gambar</th> <th>Kategori</th><th>Dikirim oleh</th>
  </tr>
    </thead>
    <tbody>
    <?php
    $no=1;
    foreach ($hasil as $item)
    {
        ?>
    <tr>
        <td class="border border-dark"><?php echo $no;?></td>
        <td class="border border-dark"><?php echo $item->ticket_id;?></td>
        <td class="border border-dark"><?php echo $item->description;?></td>
        <td class="border border-dark"><img style="width: 200px" src="<?php echo $item->image;?>"></td>
        <td class="border border-dark"><?php echo $item->category;?></td>
        <td class="border border-dark"><?php echo $item->name;?></td>
    </tr>
    <?php
            $no++;
    }
        ?>
    </tbody>
</table>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/sidebar.js"></script>
<script>
    $(document).ready( function () {
      $('#ticket-list').DataTable();
  } );
</script>
<script>
$(document).ready(function(){$("img").click(function(){this.requestFullscreen()})});
</script>
</body>
</html>
