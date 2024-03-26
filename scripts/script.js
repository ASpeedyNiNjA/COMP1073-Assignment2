// Message for customer with order details
let output = document.getElementById('output');
let priceOutput = document.getElementById('price-output');
output.textContent = smooth.sale();
priceOutput.textContent = smooth.price();

// CSS Colour Changing Function
if (smooth.flavours === "banana") {
	output.setAttribute("id", "yellow");
}
else if (smooth.flavours === "watermelon") {
	output.setAttribute("id", "pink")
}
else if (smooth.flavours === "blueberry") {
	output.setAttribute("id", "blue")
}
else if (smooth.flavours === "orange") {
	output.setAttribute("id", "orange")
}
else if (smooth.flavours === "green-pear") {
	output.setAttribute("id", "green")
}
else if (smooth.flavours === "strawberry") {
	output.setAttribute("id", "red")
}
else if (smooth.flavours === "peanut-butter") {
	output.setAttribute("id", "brown")
}
else if (smooth.flavours === "chocolate") {
	output.setAttribute("id", "darkBrown")
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