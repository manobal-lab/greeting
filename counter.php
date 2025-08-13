<?php
$file = 'count.txt';

// Create the counter file if it doesn't exist
if (!file_exists($file)) {
    file_put_contents($file, 0);
}

// Increment the counter if requested
if (isset($_GET['increment'])) {
    $count = (int) file_get_contents($file);
    $count++;
    file_put_contents($file, $count);
    echo $count;
    exit;
}

// Just return the current count
echo file_get_contents($file);
?>
