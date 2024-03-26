// Message for customer with order details
let output = document.getElementById('output');
let priceOutput = document.getElementById('price-output');
let image = document.getElementById('image')
output.textContent = smooth.sale();
priceOutput.textContent = smooth.price();

// CSS Colour Changing Function
if (smooth.flavours === "banana") {
	output.setAttribute("id", "yellow");
	image.setAttribute("src", "images/banana.png");
}
else if (smooth.flavours === "watermelon") {
	output.setAttribute("id", "pink");
	image.setAttribute("src", "images/watermelon.png");
}
else if (smooth.flavours === "blueberry") {
	output.setAttribute("id", "blue");
	image.setAttribute("src", "images/blueberry.png");
}
else if (smooth.flavours === "orange") {
	output.setAttribute("id", "orange");
	image.setAttribute("src", "images/orange.png");
}
else if (smooth.flavours === "green-pear") {
	output.setAttribute("id", "green");
	image.setAttribute("src", "images/green-pear.png");
}
else if (smooth.flavours === "strawberry") {
	output.setAttribute("id", "red");
	image.setAttribute("src", "images/strawberry.png");
}
else if (smooth.flavours === "peanut-butter") {
	output.setAttribute("id", "brown");
	image.setAttribute("src", "images/peanut-butter.png");
}
else if (smooth.flavours === "chocolate") {
	output.setAttribute("id", "darkBrown");
	image.setAttribute("src", "images/chocolate.png");
}

// This small script had to be deferred to prevent issues from loading while the inline JavaScript executes.
/*  - I attempted this assignment with PHP in order to get more practice with the language and seeing if I could get all three connected together.
	 - It was a first attempt at seeing the full-stack
	 - The resulting mostly inline code for smoothie.php I admit is very messy.
	 - Hence why the term "Seperation of Concerns" is so important. 
 */

// I'm also really disappointed over 3-4 days of missing GitHub Repository Updates
/*	 - I did the first initialization in my iCloud folder {on the Windows desktop} to make sure all my files were backed up per usual.
	 - Once I got thinking and decided to go the PHP route after chatting with ChatGPT. I copied the folder's contents including the .git invisible folder to htdocs.
	 		- To work with locally
	 - I did updates for 3-4 days none the wiser nothing was actually get updated in my repository for this assignment. 
	 - I don't know how Git Push/Pull works amongst different folders, so I ended up deleting the repository, creating a new one, and continuing on from a point that can be accessed.
*/