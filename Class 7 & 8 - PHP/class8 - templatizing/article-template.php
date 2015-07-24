<?php


//create separate array(s for each food

$products = array(

	array(
		"productName" => "Multistripe",
		"price" => "$24.50",
		"img" => "images/dragonfly.jpg"
	),

	array(
		"productName" => "Triple Stripe",
		"price" => "$29.00",
		"img" => "images/dragonfly.jpg"
	),

	array(
		"productName" => "Bar Stripe",
		"price" => "$24.50",
		"img" => "images/dragonfly.jpg"
	),

	array(
		"productName" => "Floral Print",
		"price" => "$24.50",
		"img" => "images/dragonfly.jpg"
	),

	array(
		"productName" => "Poka-Dot",
		"price" => "$27.50",
		"img" => "images/dragonfly.jpg"
	),

	array(
		"productName" => "Swirls",
		"price" => "$29.00",
		"img" => "images/dragonfly.jpg"
	),

	array(
		"productName" => "Solid Grey",
		"price" => "$24.50",
		"img" => "images/dragonfly.jpg"
	),

	array(
		"productName" => "Starry Cloud",
		"price" => "$29.00",
		"img" => "images/dragonfly.jpg"
	),

	array(
		"productName" => "Heart Stripe",
		"price" => "$27.50",
		"img" => "images/dragonfly.jpg"
	),

	array(
		"productName" => "Solid Blue",
		"price" => "$24.50",
		"img" => "images/dragonfly.jpg"
	),

	array(
		"productName" => "Two-toned Seagreen",
		"price" => "$29.00",
		"img" => "images/dragonfly.jpg"
	),

	array(
		"productName" => "Smiley",
		"price" => "$24.50",
		"img" => "images/dragonfly.jpg"
	),

); //end of outer array

?>

<?php foreach ($products as $key=>$item) : ?>

	<article class="products">
		<img src=<?php echo $item["img"]; ?> />
		<div class="productContent">
			<a href="#"><span>QUICK SHOP</span></a>
			<ul class="productDetails">
				<li><?php echo $item["productName"]; ?></li>
				<li><?php echo $item["price"]; ?></li>
				<li>FREE SHIPPING</li>
			</ul>
		</div>
	</article>

<?php endforeach; ?>