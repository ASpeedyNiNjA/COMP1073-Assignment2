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

	<!-- Variable Declarations from <form> using PHP -->
	<?php
		$customer = $_POST['customer'];
		$size = $_POST['size'];
		# $flavour_number = $_POST['flavour-number'];
		$flavours = implode(", ", $_POST['flavours']); //OpenAI. (2024). ChatGPT (3.5) [Large language model]. https://chat.openai.com
		$quantity = $_POST['quantity'];
	?>

	<!-- Saving the PHP variables in a JS object for initializing into a new class -->
	<script>
		const object = {
			name: "<?php echo $customer ?>",
			flavours: "<?php echo $flavours ?>",
			quantity: "<?php echo $quantity ?>",
		}

		// 
		class Smoothie {
			constructor(customer, size, quantity) {
				this.customer = customer;
				this.size = size;
				this.quantity = quantity;
			}
				sale() {
				 	return `${this.customer} ordered ${this.quantity} ${this.size} something flavoured Smooth Smoothies!`;
				}

		}
		let smooth = new Smoothie(object.name, object.flavours, object.quantity);

	</script>
	<!-- Output is generated from this deferred script to prevent loading issues -->
	<script src="scripts/script.js" defer></script>
</head>
<body>

<!-- Assignment Final Output -->
<h1>The Smooth Smoothie Machine</h1>
<p id="output"></p>

</body>