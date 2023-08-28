<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Title</title>
</head>
<body>
<?php 

# Script 2.7 multi.php
# Created 28 Aug 2023
# Created by Hannah Holmes
# This script creates a multidimensional array.

$mexico = array (
    'YU' => 'Yucatan',
    'BC' => 'Baja California',
    'OA' => 'Oaxaca'
);

$us = array (
    'CA' => 'California',
    'SC' => 'South Carolina',
    'FL' => 'Florida',
    'HI' => 'Hawaii',
    'NY' => 'New York'
);

$canada = array (
    'QC' => 'Quebec',
    'AB' => 'Alberta',
    'NT' => 'Northwest Territories',
    'YT' => 'Yukon'
);

$n_america = array (
    'Mexico' => $mexico,
    'United States' => $us,
    'Canada' => $canada
);

foreach ($n_america as $country => $list) {
    echo "<h2>$country</h2><ul>";
    foreach ($list as $k => $v) {
        echo "<li>$k - $v</li>\n";
    }
    echo '</ul>';
}



?>
</body>
</html>