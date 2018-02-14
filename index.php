<?php
date_default_timezone_set('America/New_York');
$day = date('l');

if (in_array($day, ['Friday', 'Saturday', 'Sunday'])) {
    $toDo = 'relax';
} else {
    $toDo = 'work';
}
?>
<?php
$input = array("“I don’t throw darts at a board. I bet on sure things. Read Sun-tzu, The Art of War. Every battle is won before it is ever fought.”-- Gordan Gekko", "“Don’t run when you lose, don’t whine when it hurts. It’s like first grade. No one likes a cry baby.”-- Gordan Gekko", "“Seek advice on risk from the wealthy, who still take risks, not friends who dare nothing more than a football bet.”--J. Paul Getty", "“There are one hundred men seeking security to one able man who is willing to risk his fortune.”-- J. Paul Getty");
$rand_keys = array_rand($input, 2);

?>

<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="css/style.css">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta charset="UTF-8">

<title>FYMMMALL</title>
	</head>
	<body>
<div class="body">
	
		<p>
	        Today is <?php echo $day; ?>; it's time to <?php echo $toDo; ?>.
	    </p>
	    
	    <p><h1>Erik Johnson</h1></p>
	    
	    <p>    
	        <img src="images/hat.jpeg" alt="picture">
	    </p>

		 <p><h1>About Me</h1></p>
	    	<p><h3>I was born in North Carolina but I now live in South Carolina. I like to read books, travel, and having intellectual conversations. Over the last few years while living in South Carolina i have successfully grown okra hydroponically, mastered the art of making moonshine, learned how to buy tax properties for pennies on the dollar, and realized there is a decent amount of money in shipping pallets. </h3></p>	
	
	
	     <p><h1>Random Quote</h1></p>
	    <p>
	    	<?php 
	    	echo $input[$rand_keys[0]] . "\n";
			?>
	    </p>

	
</div>


	</body>


</html>