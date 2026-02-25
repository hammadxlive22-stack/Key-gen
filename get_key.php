<?php
// CORS Allow karna zaruri hai taaki mypdftools.site se data fetch ho sake
header("Access-Control-Allow-Origin: *");
header("Content-Type: text/plain");

// Random Key Format: ABCD-1234-EFGH
function generateRandomKey($length = 4) {
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $key = '';
    for ($i = 0; $i < 3; $i++) {
        $part = '';
        for ($j = 0; $j < $length; $j++) {
            $part .= $characters[rand(0, strlen($characters) - 1)];
        }
        $key .= ($i == 0) ? $part : "-" . $part;
    }
    return $key;
}

$new_key = generateRandomKey();

// Yahan aap apna Database logic daal sakte hain key save karne ke liye
echo $new_key;
?>
