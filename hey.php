<!DOCTYPE html>
<html lang="en">
<!-- @author Linda Gudaqi -->
<head>

<title>home</title>
<meta charset="UTF-8" />
<meta name="viewport" 
content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" 
type="text/css" 
href="stylesheet.css" />

</head>

<body>

<nav>
<ul>
<li><a href="html_example.html" class="active">home</a></li>
<li><a href="#">section 1</a></li>
<li><a href="#">section 2</a></li>
<li><a href="#">section 3</a></li>
</ul>
</nav>

<br> 

<form method="POST" action="hey.php">

<label for="name">Name:</label>
<input type="text" id="name" name="name">
<input type="submit" value="submit">

</form>

<p>
<?php 
echo "Hey " . $_POST["name"] . "!";
?>
<p>

</body>
</html>