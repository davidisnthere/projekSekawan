<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/sidebar.css">
</head>
<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">Complaint</span> </a>
                <div class="nav_list"> <a href="<?php echo base_url(); ?>" class="nav_link"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a> <a href="<?php echo base_url(); ?>complaint/tambahData" class="nav_link"> <i class='bx bx-plus-circle'></i> <span class="nav_name">Create</span> </a> <a href="<?php echo base_url(); ?>category/" class="nav_link"> <i class='bx bx-category'></i> <span class="nav_name">Category</span> </a> </div>
            </div> <a href="<?php echo base_url(); ?>/auth/logout" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">Logout</span> </a>
        </nav>
    </div>
    <!--Container Main start-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/sidebar.js"></script>
<script>
</script>
</body>
</html>
    <!--Container Main end-->
