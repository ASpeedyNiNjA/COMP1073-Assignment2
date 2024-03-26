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
		# $flavour_number = $_POST['flavour-number']; Hidden form element for possible 'Take It Further' attempts
		$flavours = implode(", ", $_POST['flavours']); //OpenAI. (2024). ChatGPT (3.5) [Large language model]. https://chat.openai.com
		$quantity = $_POST['quantity'];
	?>

	<!-- Saving the PHP variables in a JS object for initializing into a new class -->
	<script>
		const object = {
			name: "<?php echo $customer ?>",
			size: "<?php echo $size ?>",
			flavours: "<?php echo $flavours ?>",
			quantity: "<?php echo $quantity ?>",
		}

		// Class that receives data from the object and generates output for script.js
		class Smoothie {
			constructor(customer, size, flavours, quantity) {
				this.customer = customer;
				this.size = size;
				this.flavours = flavours;
				this.quantity = quantity;
			}
				sale() {
				 	return `${this.customer} ordered ${this.quantity} ${this.size} ${this.flavours} flavoured Smooth Smoothies!`;
				}

				sizeMultiplier() {
					if(this.size === "small") {
						return 1;
					}
					else if (this.size === "medium") {
						return 2;
					}
					else if (this.size === "large") {
						return 3;
					}
					else {
						console.log('Error');
					}
				}

				quantityMultiplier() {
					let quantity = Number(this.quantity);
					console.log(typeof quantity);
					console.log(quantity);
					return quantity;
				}

				flavour(){

				}

				price(){
					console.log(this.sizeMultiplier() * this.quantityMultiplier());
				}

		}
		let smooth = new Smoothie(object.name, object.size, object.flavours, object.quantity);

	</script>

	<!-- Output is generated from this deferred script to prevent loading issues -->
	<script src="scripts/script.js" defer></script>
</head>
<body>

<!-- Assignment Final Output -->
<h1>The Smooth Smoothie Machine</h1>
<p id="output"></p>

</body>