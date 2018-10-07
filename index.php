<!DOCTYPE>
<html>
	<head>
		<title>rush00</title>
	<link rel="stylesheet" href="styles/style.css" media="all" />
	</head>
<body>
	<!--main container-->
	<div class="main_wrapper">
		<!--header-->
		<div class="header_wrapper">
			<p id="logo">header div</p>
			<p id="banner">right part</p>
		</div>
		<!--menu_bar-->
		<div class="menu_bar">
			<ul id="menu">
				<li><a = href="#">Home</a></li>
				<li><a = href="#">Shop</a></li>
				<li><a = href="#">Profile</a></li>
				<li><a = href="#">Cart</a></li>
				<li><a = href="#">Sign Up</a></li>
			</ul>
			<div id="form">
				<form method="get" action="results.php" enctype="multipart/form-data">
					<input type="text" name="user_query" />
					<input type="submit" name="search" value="Search" />
				</form>
			</div>
		</div>
		<!--content-->
		<div class="content_wrapper">
			<div id="sidebar">
				<div id="sidebar_title">Categories</div>
				<ul id="categories">
					<li><a href="#">Shoes</a></li>
					<li><a href="#">Socks</a></li>
					<li><a href="#">Pants</a></li>
					<li><a href="#">Shirts</a></li>
					<li><a href="#">Hats</a></li>
				</ul>
			</div>
			<div id="content_area">content</div>
		</div>
		<!--footer-->
		<div id="footer">footer</div>
	</div>
</body>
</html>
