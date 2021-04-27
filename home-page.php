

<!DOCTYPE html>
<html>
<head>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">

	<title>IN-BUDGET-CLOTHING</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>

	
<header>
	<div class="header-top">
		<div class="container">
		
			<div class="header-top-content">
				<p>Here you will get all clothes in a good warriety according to your budget..!!</p>
			</div>

		</div>
	</div>

	<div class="logo-line">
		<div class="container">
			<div class="logo-nav">
				<div class="main-social-media">
					<div class="social-media">
						<i class="fa fa-facebook"></i>
						<i class="fa fa-google"></i>
						<i class="fa fa-instagram"></i>
						<i class="fa fa-twitter"></i>
						
					</div>
				</div>
			<div class="logo">
				   <img src="logo.png" alt="logo">
				
			</div>
			<div class="add-cart-main">
				<div class="join-btn">
					<a href="sigin.html" >
					<input type="Submit" name="btn" value="JOIN">
					</a>
				</div>
				<div class="add-cart">
						<i class="fa fa-shopping-cart"></i>
						<div class="cart-frame">
				<div class="sub-cart-frame">
				<div class="Recently-added-items">
					<p>Recently Added Item(s)</p>
				</div>

				<div></div>
				<div class="main-total-cart">
					<div class="sub-total">
						<p>Cart Sub-Total</p>
					</div>
					<div id="Total">Rs.</div>
				</div>
				<div class="main-cart-btn">
					<div class="cart-view">
						<a href="#">
						<button class="view-cart">View Cart</button>
						</a>
					</div>
					<div class="cart-checkout">
						<a href="#">
						<button class="checkout">Check-out View</button>
						</a>
					</div>
				</div>
			</div>

			</div>
				</div>
			</div>
			
		</div>

		</div>
	</div>

	<nav>
		<div class="nav-contain">
			<div class="container">
				
				<div class="nav-section">
					<nav class="nav-barlist">
						<ul class="ul">
							
							

							<li class="li"><a href="shirts.php">Shirts</a>
								<ul class="ul-sub">
									<li>formal shirts</li>
									<li>Casual Shirts</li>
									
								</ul>
							</li >
							


							<li class="li"><a href="shirts.php">Pents</a>
								<ul class="ul-sub">
									<li><a href="#">Dress Pent</a></li>
									<li><a href="#">Cottom Pent</a></li>
									<li><a href="#">Geans Pent</a></li>
									
								</ul>
							</li >
							<li class="li"><a href="#">T-Shirts</a>
								<ul class="ul-sub">
									<li><a href="#">Color T-shirts</a></li>
									<li><a href="#">Round T-shirts</a></li>
								</ul>
							</li >
								<li class="li"><a href="#">Gents-Kurta</a>
								<ul class="ul-sub">
									<li><a href="#">Simple Kurta</a></li>
									<li><a href="#">Embriodery Kurta</a></li>
								</ul>
							</li>
							<li class="li"><a href="#">Gents Shalwar-Kameez</a>
								<ul class="ul-sub">
									<li><a href="#">Simple </a></li>
									<li><a href="#">Embriodery </a></li>
								</ul>
							</li>

							<li class="li"><a href="#">Ladies Kurti</a></li>	
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</nav>			
</header>
<section>
	<div class="slider-bar">
		<div class="container">
			<div class="slider">
			

			<div class="slider-content">
			  <img class="mySlides" src="mens-fashion.jpg" >
			  <img class="mySlides" src="mens-t-shirts.png" >
			  <img class="mySlides" src="mens-polo-shirts.png" >
			</div>

			<div class="slider-right">
					<img src="mens-hoodi.jpg">
				<img src="singles-day.jpg">
				
			</div>



			</div>
		</div>
	</div>
</section>
<section class="heading-line">
	<h1>LATEST PRODUCT</h1>
</section>
<section class="">
<?php
include'config.php';
$sql=mysqli_query($conn,"SELECT * FROM `products`");

while ($row=mysqli_fetch_array($sql)) {
$image=$row['image'];
	$name=$row['name'];
	$price=$row['price'];
	$discount=$row['discount'];
  ?>

	<div class="card-section">
	<div class="product-sec">

				<div class="card1">
					<div class="card1-desc">

                         <img src="<?php echo $image  ?> ">
                      
						
						<h1><?php echo $name?></h1>
						<span class="line-through"><?php echo $price ?></span>
						<span  class="discount"><?php echo $discount ?></span>
						<div class="card-btn">
							<button name="click">Add to Cart</button>
						</div>
					</div>
				</div>
			</div>
				</div>
				
				
				
				

<?php }?>
</section>
<section>
	
	<div class="company-products">
		<div class="container">
			<div class="product-head">
				<div class="first-product">
					<div class="Mens-Polos-up">
					<img src="Mens-Polos.jpg">
					</div>
					<div class="Mens-Polos-down">
					<img src="Mens-Denim-Jeans.jpg">
					</div>
				</div>
				<div class="middle-product">
					<div class="middle-product-hover">
					 <img src="mens-wear-sale.jpg">
					</div>
				</div>
				<div class="end-product">
					<div class="end-product-up">
					<img src="mens-formal.jpg">
					</div>
					<div class="end-product-down">
					<img src="Mens-chinos.jpg">
					</div>
				</div>

			</div>
		</div>
		
	</div>
</section>
	
<section class="heading-line">
	<h1>LATEST PRINTED T-SHIRTS</h1>
</section>

<section class="card-section">
	<?php
include'config.php';
$sql=mysqli_query($conn,"SELECT * FROM `products`");

while ($row=mysqli_fetch_array($sql)) {
$image=$row['image'];
	$name=$row['name'];
	$price=$row['price'];
	$discount=$row['discount'];

  ?>

	<div class="product-sec">
				
				<div class="card1">
					<div class="card1-desc">
					
						<img src="<?php echo $image  ?> ">
                      
						
						<h1><?php echo $name?></h1>
						<span class="line-through"><?php echo $price ?></span>
						<span  class="discount"><?php echo $discount ?></span>
						<div class="card-btn">
							<button name="click">Add to Cart</button>
						</div>
					</div>
				</div>
			</div>
			
				
		<?php }?>					
				
</section>
<section>
	<div class="main-discount-offer">
		<div class="container">
			<div class="discount-offer">
				<img src="mens-wear-discount.jpg">
			</div>
		</div>
	</div>
</section>
<section class="heading-line">
	<h1>LATEST JEANS</h1>
</section>

<section class="card-section">
	<div class="product-sec">
				
				<div class="card1">
					<div class="card1-desc">
						<?php
include'config.php';
$sql=mysqli_query($conn,"SELECT * FROM `latest jeans`");

while ($row=mysqli_fetch_array($sql)) {
$image=$row['image'];
	$name=$row['name'];
	$price=$row['price'];
	$discount=$row['discount'];

  ?>
					<img src="<?php echo $image  ?> ">
                      
						
						<h1><?php echo $name?></h1>
						<span class="line-through"><?php echo $price ?></span>
						<span  class="discount"><?php echo $discount ?></span>
						<div class="card-btn">
							<button name="click">Add to Cart</button>
						<?php }?>
						</div>
					</div>
				</div>
				
				
				</div>				
				
</section>
<section class="heading-line">
	<h1>TOP BRANDS</h1>
</section>

<section>
	<div class="top-brands">
		<div class="container">
			<div class="brands-logos">
				<div class="sub-brands-logo">
					<img src="appearl-logo.png">
				</div>
				<div class="sub-brands-logo">
					<img src="aerosoft-logo.png">
				</div>
				<div class="sub-brands-logo">
					<img src="aashi-mens-fashion.jpg">
				</div>
				<div class="sub-brands-logo">
					<img src="amir-logo.png">
				</div>
				<div class="sub-brands-logo">
					<img src="aerosoft-logo.png">
				</div>
				<div class="sub-brands-logo">
					<img src="aashi-mens-fashion.jpg">
				</div>
				<div class="sub-brands-logo">
					<img src="amir-logo.png">
				</div>
				<div class="sub-brands-logo">
					<img src="appearl-logo.png">
				</div>

			</div>
		</div>
	</div>
</section>
<section>
	<div class="description">
		<div class="container">
			<div class="description-details">
				<div class="desc-headings">

					<h2>MENSWEAR.PK | PAKISTAN’S NO 1 ONLINE MEN’S FASHION AND CLOTHING STORE 
						PRESENT YOURSELF AS A WELL-DRESSED AND ELEGANT MAN WITH OUR UNPARALLELED COLLECTION OF STYLISH MEN’S CLOTHING</h2>
				</div>
				<div class="desc-para">
					<p>Want to know what’s hot nowadays so you too can stay up-to-date and wear the latest styles? You have come to the right place. <br> <br>At MensWear.pk, we showcase the modern styles of men’s clothing that will turn you into a fashion icon among your friends. No matter what occasion or season it is, you will always find an appropriate piece of apparel for your specific needs.</p>
				</div>
				<div class="desc-headings">
					<h2>OUR LATEST MEN’S FASHION COLLECTION ONLINE HELPS YOU SAVE TIME AND MONEY</h2>
				</div>
				<div class="desc-para">
					<p>Time is important… and we help you save it by showcasing a huge and impressive collection of Men’s fashion clothing under one roof. Your demands will be taken care of here with professionalism and quality. There is no need to drive to stores and waste your time in traffic and checkout lines when everything that you need has been nicely displayed here for your perusal. <br><br>Whether you are looking for something for a Wedding, Valima, Eid, Ramadan, Business Meeting, Casual Gathering, Formal Party or a get-together with friends, you will definitely find something appropriate and classy here.</p>
				</div>
				<div class="desc-headings">
					<h2>BUY MEN’S CLOTHING IN PAKISTAN WITH OUR 100% SATISFACTION GUARANTEE</h2>
				</div>
				<div class="desc-para">
					<p>Along with great designs and colors, quality matters too. Without quality, your clothing will not last long. Therefore, we offer the best bang for your buck by providing high-quality men’s fashion clothing in Pakistan for all seasons and occasions. <br><br>Whether are looking for Formal Shirts or Casual Shirts , or something eastern like Shalwar Kameez, Kurta or  Waistcoat or even different types of T-shirts, you will find everything here. You will also find Casual Shoes and Formal Shoes, Sandals and Slippers here. In the cold weather, you can always count on our high-quality Sweaters and stylish Hoodies. <br><br>But…This is not it. We boast a wide collection of Men’s Fashion Accessories as well such as Watches, Bags, Wallets, Belts, Eyewear, Ties and Cufflinks, Socks, Caps, Hats and Gloves and much more. <br><br>You can buy from MensWear.pk with our 100% assurance that we stand behind our products and offer high-quality products and services to win your trust and repeat-business. We’ll be happy to hear from you and help you. Please don’t hesitate to get in touch with us if you have any questions at all.</p>
				</div>
				
			</div>
		</div>
	</div>
	
</section>

<footer>

<div class="footer-main">
	<div class="container">
		<div class="footer-sec">
			<div class="footer-sec-left">
				<p>&copy <a href="#" style="color: #CDA85C;text-decoration: none;">In-budget-clothing.pk</a>| Powered by Clothing Styles</p>
			</div>
			<div class="footer-sec-right">
					<div class=" footer-social-media">
						<i class="fa fa-facebook"></i>
						<i class="fa fa-google"></i>
						<i class="fa fa-instagram"></i>
						<i class="fa fa-twitter"></i>
						
					</div>
			</div>
		</div>		
	</div>
</div>



</footer>

<?php  ?>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
</body>
</html>

