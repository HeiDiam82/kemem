<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    function fibonacciString($input) {
        $length = strlen($input);
        $fibonacci = [1, 1]; // Memulai deret Fibonacci dari 1
    
        // Generate Fibonacci sequence up to the length of the input string
        for ($i = 2; $i < $length; $i++) {
            $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        }
    
        $output = '';
        for ($i = 0; $i < $length; $i++) {
            $asciiValue = ord($input[$i]);
            $newAsciiValue = $asciiValue + $fibonacci[$i];
    
            // Jika melebihi 'Z', kembali ke 'A'
            if ($newAsciiValue > ord('Z')) {
                $newAsciiValue = ord('A') + ($newAsciiValue - ord('Z') - 1);
            }
    
            $output .= chr($newAsciiValue);
        }
    
        return $output;
    }
    
    $input = "ADYJ";
    $output = fibonacciString($input);
    echo "Output: " . $output; // Output: BEAM
    
    ?>
    

</body>
</html>