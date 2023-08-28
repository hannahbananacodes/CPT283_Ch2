<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Title</title>
</head>
<body>
<?php 

# Script 2.6 calendar.php
# Created 28 Aug 2023
# Created by Hannah Holmes
# This script uses arrays to create a calendar

// Create months, days, years arrays
$months = array (1=> 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October',
    'November', 'December');
$days = range (1, 31);
$years = range (1990, 2023);

// Make pull-down menu
echo '<select name="month">';
foreach ($months as $key => $value) {
    echo "<option value=\"$key\">$value</option>\n";
}
    echo '</select>';

echo '<select name="day">';
foreach ($days as $value) {
    echo "<option value=\"$value\">
    $value</option>\n";
}
    echo '</select>';

echo '<select name="year">';
foreach ($years as $value) {
    echo "<option value=\"$value\">
    $value</option>\n";
}
    echo '</select>';

$yearnum = count($years);
echo "<p>$yearnum</p>";

?>
</body>
</html>