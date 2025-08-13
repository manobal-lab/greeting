<?php
$file = 'count.txt';

// If file doesn't exist, create it with zero
if (!file_exists($file)) {
    file_put_contents($file, 0);
}

// If request is to increment
if (isset($_GET['increment'])) {
    $count = (int) file_get_contents($file);
    $count++;
    file_put_contents($file, $count);
    echo $count;
    exit;
}

// If request is to get the count
echo file_get_contents($file);
?>
