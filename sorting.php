<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Title</title>
</head>
<body>
<table border="0" cellspacing="3" cellpadding="3" align="center">
	<tr>
		<td><h2>Rating</h2></td>
		<td><h2>Title</h2></td>
	</tr>
<?php 

# Script 2.8 sorting.php
# Created 28 Aug 2023
# Created by Hannah Holmes
# This script works with sorting arrays

// Create the array
$series = array (
    'A Court of Thorns and Roses' => 10,
    'Throne of Glass' => 7,
    'House of Earth and Blood' => 8,
    'The Remnant Chronicles' => 10,
    'Dance of Thieves' => 9,
    'Kingdom of Runes' => 8
);


// Display series in original order
echo '<tr><td colspan="2"><b>In their original order:</b></td></tr>';
foreach ($series as $title => $rating) {
    echo "<tr><td>$rating</td>
    <td>$title</td></tr>\n";
}

// Display series sorted by title
ksort($series);
echo '<tr><td colspan="2"><b>Sorted by title:</b></td></tr>';
foreach ($series as $title => $rating) {
    echo "<tr><td>$rating</td>
    <td>$title</td></tr>\n";
}


// Display series sorted by rating
arsort($series);
echo '<tr><td colspan="2"><b>Sorted by rating:</b></td></tr>';
foreach ($series as $title => $rating) {
    echo "<tr><td>$rating</td>
    <td>$title</td></tr>\n";
}

?>
</table>
</body>
</html>