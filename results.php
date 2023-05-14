<?php

// Initializing product variable to zero
$product = 0;

// Getting the two factors from user to calculate the product later on
$firstNum = $_POST["first-number"];
$secondNum = $_POST["second-number"];

//If statement for an error message if user leaves the textfield empty or enters an invvalid input 
  if ((!is_numeric($firstNum) || !is_numeric($secondNum)) || ($firstNum == "" || $secondNum == "")) {
    echo "Please enter valid numbers.";
  }

// Otherwise, execute the code to calculate the product
else {
    // For loop to find product using repeated addition
    for ($counter = 0; $counter < abs($secondNum); $counter++) {
        $product += abs($firstNum);
    }

  //If statement to set the product to negative if one of the numbers is negative    
  
  if ($firstNum < 0) {
    
        $product *= -1;
    }

    if ($secondNum < 0) {
        $product *= -1;
    }

    // Displaying product back to user
    echo "The product of " . $firstNum . " and " . $secondNum . " is " . $product . ".";
}
?>