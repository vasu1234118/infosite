<?php
 // Current date and time
$datetime = date("Y-m-d H:i:s");

// Convert datetime to Unix timestamp
$timestamp = strtotime($datetime);

// Subtract time from datetime
$time = $timestamp - (5 * 60);

// Date and time after subtraction
$datetime = date("Y-m-d H:i:s", $time); 

?>