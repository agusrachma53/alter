<?php

if(!$this->session->userdata('loginuser')){
  redirect(base_url('admin'));
}

?>
<!DOCTYPE html>
<html lang="en">
    <base href="<?php echo base_url('assets/user/')?> /">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" href="../css/bootstrap.css">
    <link rel="stylesheet" media="screen" href="../css/custom.css">
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <title>Minimum Bootstrap HTML Skeleton</title>
<!--  -->

</head>

<body>
    <nav class="navbar navbar-default" role="navigation">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="">Home</a>
	</div>

	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav">
			<li><a href="<?php echo base_url('admin/slider')?>">Slide Show</a></li>
			<li><a href="<?php echo base_url('admin/category_product/tambah')?>">Kategori Produk</a></li>
			<li><a href="<?php echo base_url('admin/article') ?>">Form Article</a></li>
			<li><a href="<?php echo base_url('admin/kategori_artikel/tambah')?>">Kategori Artikel</a></li>
			<li><a href="<?php echo base_url('admin/form_artikel/tambah')?>">Form Artikel</a></li>
		</ul>
		<form class="navbar-form navbar-left" role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
			<button type="submit" class="btn btn-default"><?php echo $this->session->userdata('user_login'); ?></button>
		</form>
    <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $this->session->userdata('user_login'); ?> <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="">Edit User</a></li>
              <li><a href="">Ubah Password</a></li>
              <li><a href="<?php echo base_url('admin/logout'); ?>">logout</a></li>
            </ul>
        </li>
    </ul>
	</div><!-- /.navbar-collapse -->
</nav>
