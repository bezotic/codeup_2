<?php
  var_dump($_GET);
  var_dump($_POST);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My First HTML Form</title>
	<link rel="stylesheet" href="css/site.css">
</head>
<body>
	<h1 class="fancy-header">User Login</h1>
	<form method="POST" action="/my_first_form.php">
    <p>
        <label for="username">Username</label>
        <input id="username" placeholder="enter your username" name="username" type="text">
    </p>
    <p>
        <label for="password">Password</label>
        <input id="password" placeholder="enter your password" name="password" type="password">
    </p>
    <p>
        <button type="submit">Login</button>
    </p>
</form>
<form method="POST" action="/my_first_form.php">
 	<h1 class="fancy-header">Compose An Email</h1>
		<p>
			<label for="to">To:</label>
			<input type="text" id="recipient" name="recipient">
		</p>
		<p>
			<label for="from">From:</label>
			<input type="text" id="sender" name="sender">
		</p>
		<p>
			<label for="subject">Subject:</label>
			<input type="text" id='subject' name="subject">
		</p>
		<p>
			<label for="body">Body:</label>
			<textarea id="email_body" name="email_body" rows="5" cols="40"></textarea>
			<input type="checkbox" id="save_copy" name="save_copy" value="yes" checked>
			<label for="save_copy">Save copy to sent folder?</label>
		</p>
			<button type='submit'>Send</button>

</form>
<form method="POST" action="/my_first_form.php">
	<h1 class="fancy-header">Multiple Choice Test</h1>
		<p>What is the capital of Texas?</p>
			<label>
			    <input type="radio" name="q1" value="houston">
			    Houston
			</label>
			<label>
			    <input type="radio" name="q1" value="dallas">
			    Dallas
			</label>
			<label>
			    <input type="radio" name="q1" value="austin">
			    Austin
			</label>
			<label>
			    <input type="radio" name="q1" value="san antonio">
			    San Antonio
			</label>
		<p>What is the home of the Spurs?</p>
			<label>
			    <input type="radio" name="q2" value="houston">
			    Houston
			</label>
			<label>
			    <input type="radio" name="q2" value="dallas">
			    Dallas
			</label>
			<label>
			    <input type="radio" name="q2" value="austin">
			    Austin
			</label>
			<label>
			    <input type="radio" name="q2" value="san antonio">
			    San Antonio
			</label>
			
		<p>What operating systems have you used?</p>
			<label><input type="checkbox" id="os1" name="os[]" value="linux"> Linux</label>
			<label><input type="checkbox" id="os2" name="os[]" value="osx"> OS X</label>
			<label><input type="checkbox" id="os3" name="os[]" value="windows"> Windows</label>
		<p>Do you like pizza?</p>
			<label for="pizza">Select your answer</label>
			<select id="pizza" name="pizza">
				<option selected value="1">yes</option>
				<option value="0">no</option>
			</select>
		<p>
			<button type='submit'>Send</button>
		</p>		
</form>
<form method="POST" action="/my_first_form.php"></form>
	<h1 class="fancy-header">Select Testing</h1>
		<label for="transmission">Select your transmission type: </label>
			<select id="question" name="qeuestion">
			    <option value="1">Yes</option>
			    <option value="0" selected>No</option>
			</select>
		<button type="submit">Submit</button>
</body>
</html>