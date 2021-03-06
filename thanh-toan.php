<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link href='https://css.gg/menu.css' rel='stylesheet'>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="isset/css/cav-css.css">
	<link rel="stylesheet" type="text/css" href="isset/css/thanh-toan.css">
	<script type="text/javascript" src="isset/js/js.js"></script>
	<!-- <script type="text/javascript" src="isset/js/js.js"></script> -->
	<title>Document</title>
</head>
<body>
	<header>
		<div class="heaser-trai"><a href="http://localhost/chupanhvui/index.html"><img src="isset/images/Untitled-1.png"></a></div>
		<div class="nav-menu" id="nav-menu">
			<a href="#" class="nav-thanh-menu"><i class="fas fa-bars"></i></a>
		</div>
		<div class="header-phai" id="show-menu">
				<ul class="nav nav-tabs">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="http://localhost/chupanhvui/index.html" role="button" aria-haspopup="true" aria-expanded="false">GALLERY</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="http://localhost/chupanhvui/tac-gia.html">???NH PHONG C???NH</a>
						<a class="dropdown-item" href="#">???NH CH??N DUNG</a>
						<a class="dropdown-item" href="#">???NH ???M TH???C</a>
						<!-- <div class="dropdown-divider"></div> -->
						<a class="dropdown-item" href="#">???NH ???????NG PH???</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">PHOTO</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Action</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Action</a>
					</div>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">TRI???N L??M</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link ">CHECK IN</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">KH??A H???C</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">V??? CH??NG T??I</a>
				</li>
				<li class="nav-item nav-thanh-lk">
					<ul class="thanh-lk">
						<a href="#"class="icon-lk"><i class="fab fa-facebook-f"></i></a>
						<a href="#"class="icon-lk"><i class="fab fa-youtube"></i></a>
						<a href="#"class="icon-lk"><i class="fas fa-bell"></i></a>
						<li class="nav-item dang-nhap">
							<a href="#" class="nav-link">????NG NH???P</a>
						</li>
					</ul>
				</li>
			</ul> 
		</div>
	</header>
	<div class="row thanh-toan-row">
		<div class="col-12 col-sm-12 col-lg-6">
			<p id="thanh-toan-main-img"><img src="./isset/images/tac-pham-chi-tiet-1.PNG" alt=""></p>
		</div>
		<div class="col-12 col-sm-12 col-lg-6">
			<div class="thanh-toan-ma-anh">
				<p ><b id="thanh-toan-ma-anh">M?? ???nh - T??N T??C PH???M</b></p>
				<p id="thanh-toan-tt-tgia">NHI???P ???NH GIA: Tr???n Minh A</p>
			</div>
			<div class="thanh-toan-ttsize">
				<input type="radio" name="kho-anh" checked ><label><?php echo $_GET['kho-anh']; ?></label>
			</div>
			<div class="thanh-toan-email">email</div>
		</div>
		<div class="col-12 col-sm-12 col-lg-6">
			thanh toan
		</div>
		<div class="chu-thich">
			<p id="thanh-toan-chu-thich">Sau khi ???? thanh to??n v?? nh???n ???G???i E-mail??? ch??ng t??i s??? li??n h???
l???i cho qu?? kh??ch qua S??T ????? x??c nh???n th??ng tin ?????t h??ng v?? h??nh th???c v???n chuy???n.</p>
		</div>

	</div>
	<footer>
		<form class="form-search">
			<div id="inner-form">
				<div class="search-text">
					<input type="text" id="search" placeholder="N???i dung t??m ki???m">
				</div>
				<div class="btn-search">
					<button id="btn-search"><i class="fas fa-search"></i>

					</button>
				</div>
			</div>
		</form>
	</footer>
</body>
</html>