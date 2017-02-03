"use strict";

// TODO: Ask the user for their name.
//       Keep asking if an empty input is provided.




do {
	var username = prompt('what is your name');
} while (username.trim() == '' || username == null); 



alert('welcome!' + " " + username);

var confirm = confirm('Do you like Pizza?');

 if (confirm) {
 	alert('awesome! Me too!');
 } else {
 	alert('lame!');
 }

// TODO: Show an alert message that welcomes the user based on their input.

// TODO: Ask the user if they like pizza.
//       Based on their answer show a creative alert message.


