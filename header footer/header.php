<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fanimation</title>
    <!-- Import Bootstrap css, js, fontawesome here -->
    <!-- Import Boostrap css, js, font awesome here -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">       
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link href="style-headerfooter.css" rel="stylesheet">
</head>
<body>
	<!-- HEADER -->
	<header>
		<a href="index.html" class="logo">
			<img src="https://fanimation.com/wp-content/uploads/2021/04/Logo_white_1.png" alt="">
		</a>
		<div class="navigation">
			<ul class="menu">

				<div class="searchbar">
					<input type="text" placeholder="Search for ...">
						<div class="icon">
							<i class="fas fa-search"></i>
						</div>
				</div>

				<div class="close-btn"></div>
				<li class="menu-item">
					<a class="sub-btn" href="product.html">Products
						<i class="fas fa-angle-down"></i>
					</a>
					<ul class="sub-menu">
						<li class="sub-item"><a href="../product.html">All Products</a></li>
						<li class="sub-item"><a href="../product.html">Damp Rated Fans</a></li>
						<li class="sub-item"><a href="../product.html">Wet Rated Fans</a></li>
						<li class="sub-item"><a href="../product.html">Dry Rated Fans</a></li>
					</ul>
				</li>           

				<li class="menu-item">
					<a class="sub-btn" href="contact.html">Help Center
						<i class="fas fa-angle-down"></i>
					</a>
					<ul class="sub-menu">
						<li class="sub-item"><a href="../product_registration.html">Product Registration</a></li>
						<li class="sub-item"><a href="../contact.html">Contact</a></li>
						<li class="sub-item"><a href="../explore.html">Choosing a Fan</a></li>
					</ul>
				</li>
				<li class="menu-item"><a href="../aboutus.html">About</a></li>
				<li class="menu-item"><a href="../login.html"><i class="far fa-user mr-2"></i>Login</a></li>
			</ul>
		</div>
		<div class="menu-btn"></div>
	</header>
	<!-- HEADER -->

	<script type="text/javascript">
		//jquery for toggle dropdown menus
	$(document).ready(function(){
		//toggle sub-menus
		$(".sub-btn").click(function(){
			$(this).next(".sub-menu").slideToggle();
		});
	});

	//javascript for the responsive navigation menu
	var menu = document.querySelector(".menu");
	var menuBtn = document.querySelector(".menu-btn");
	var closeBtn = document.querySelector(".close-btn");

	menuBtn.addEventListener("click", () => {
		menu.classList.add("active");
	});

	closeBtn.addEventListener("click", () => {
		menu.classList.remove("active");
	});
	</script>
</body>
</html>