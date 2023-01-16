<?php
$this->load->view('include/loader');
?>
<!DOCTYPE html>
<html>
<head>
    <!-- Load file CSS Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Load file library Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Load file library JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/sidebar.css">
    <style>
       body {
    padding-top: 74px;
    padding-bottom: 54px;
}

/* Tablet */
@media (min-width:600px) {
    .body {
        padding-top: 90px;
        padding-bottom: 70px;
    }
}

/* Desktop */
@media (min-width:900px) {
    body {
        padding-top: 95px;
        padding-bottom: 75px;
    }
}

.breadcrumb {
    padding: 8px 30px !important;
}
    </style>
</head>
<body>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo base_url() ?>complaint">Home</a></li>
  </ol>
</nav>
<?php if($this->session->flashdata('msg_success')): ?>
				<div class="alert alert-success"><?php echo $this->session->flashdata('msg_success') ?>
				</div>
			<?php endif ?>
			<?php if ($this->session->flashdata('msg_error')): ?>
				<div class="alert alert-danger"><?php echo $this->session->flashdata('msg_error'); ?>
				</div>
			<?php endif ?>

<?php
$this->load->view('include/sidebar');
?>
<table class="table table-striped table-bordered border-dark" id="ticket-list">
    <thead>
  <tr>
      <th> No</th> <th>ID Kategori</th> <th>Kategori</th> <th>Action</th>
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
        <td class="border border-dark"><?php echo $item->category_id;?></td>
        <td class="border border-dark"><?php echo $item->category;?></td>
        <td class="border border-dark" style="text-align: center;"><a class="btn btn-info btn-sm" href="edit/<?= $item->category_id ?>"><i class='bx bx-edit-alt'></i></a>
        <a class="delete btn btn-danger btn-sm" href="category/delete/<?= $item->category_id ?>"><i class="bx bx-trash"></i></a></td>
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
<script>
    $(document).ready( function () {
      $('#ticket-list').DataTable();
  } );
</script>
<script>
    $(document).ready(function() {
        $(".delete").click(function(e) {
            e.preventDefault();
            const href = $(this).attr('href');

            Swal.fire({
                toast: true,
                title: 'Apakah kamu yakin ingin menghapus data?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Hapus!',
            }).then((result) => {
                if (result.isConfirmed) {
                    document.location.href = href;
                }
            })
        });
    });
</script>
</body>
</html>
