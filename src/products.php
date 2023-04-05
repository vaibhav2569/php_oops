<?php
session_start();
?>
<!DOCTYPE html>
<html>
<!-- head section starts here -->

<head>
	<title>
		Products
	</title>
	<link rel="stylesheet" href="./CSS/style.css?php echo time(); ?>">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>

<body>
	<!-- header section starts here -->
	<div id="header">
		<h1 id="logo">Logo</h1>
		<nav>
			<ul id="menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="products.php">Products</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</nav>
	</div>
	<!-- products are displayed here -->
	<div id="main">
		<div id="products">
		</div>
	</div>
	<!-- cart is getting displayed here -->
	<div id="cart">
		<table id="tableCart">
			<thead>
				<tr>
					<th class="thcart">Product Image</th>
					<th class="thcart">Product Name</th>
					<th class="thcart">Product Quantity</th>
					<th class="thcart">Product Price</th>
					<th class="thcart">Remove Product</th>
				</tr>
			</thead>
			<tbody id="tbodyCart">

			</tbody>
		</table>
	</div>
	<?php
	?>
	<!-- footer section starts here -->
	<div id="footer">
		<nav>
			<ul id="footer-links">
				<li><a href="#">Privacy</a></li>
				<li><a href="#">Declaimers</a></li>
			</ul>
		</nav>
	</div>
</body>
<script src="script.js"></script>

</html>