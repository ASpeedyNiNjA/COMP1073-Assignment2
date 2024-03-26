<!DOCTYPE html>
<html lang="en-CA">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Chris Trombly ~ 100051457">
	<meta name="description" content="Assignment 2 ~ COMP1073">
	<meta name="robots" content="noindex, nofollow">
	<title>The Smoothie Machine</title>
	<link rel="icon" href="images/skull-straw.png" type="image/x-icon">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Agbalumo&family=Aladin&display=swap" rel="stylesheet">
	<link href="styles/style.css" rel="stylesheet">
	
	<!-- Variable Declarations from <form> -->
	<?php
		$customer = $_POST['customer'];
		$size = $_POST['size'];
		# $flavour_number = $_POST['flavour-number'];
		$flavours = implode(", ", $_POST['flavours']); //OpenAI. (2024). ChatGPT (3.5) [Large language model]. https://chat.openai.com
		$quantity = $_POST['quantity'];
	?>
	<script>
		const object = {
			name: "<?php echo $customer ?>",
			flavours: "<?php echo $flavours ?>",
			quantity: "<?php echo $quantity ?>",
		}
		class Customer {
			constructor(customer, size, quantity) {
				this.customer = customer;
				this.size = size;
				this.quantity = quantity;
			}
				// sale() {
				// 	return `${this.name} ordered ${this.quantity} ${this.size} something flavoured Smooth Smoothies`;
				// }

		}
		let sale = new Customer(object.name, object.flavours, object.quantity);

		let customer = "<?php echo $customer ?>";
		console.log(customer);

	</script>
	<script src="scripts/script.js" defer></script>
</head>
<body>

<!-- Learning & Testing -->
<h1><?php echo "$customer"?></h1>
<p><?php echo "$size"?></p>
<p>Flavours: <?php echo "$flavours"; ?></p>
<p><?php echo "$quantity"?></p>

<!-- Assignment Final Output -->
<h2 id="output"></h2>


</body>