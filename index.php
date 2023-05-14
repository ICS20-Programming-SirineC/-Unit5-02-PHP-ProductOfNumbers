<!DOCTYPE html>
<html>
<head>
  <!-- Metadata -->
  <meta charset="utf-8">
  <meta name="description" content="Unit5-02-HTML-ProductOfNumber">
  <meta name="keywords" content="Immaculata, ICS2O">
  <meta name="author" content="Sirine Cherkaoui">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="./fav/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./fav/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./fav/favicon-16x16.png">
  <link rel="manifest" href="./fav/site.webmanifest">

<!-- Google's MDL -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.pink-cyan.min.css" />
    
    <!-- CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    
    <!-- Web page title -->
    <title>Product of Numbers, with PHP</title>
  </head>
  <body>
    
    <!-- Google's MDL -->
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  
  
      <!-- Web page heading -->
         <?php echo"<h1>Product of Numbers, with PHP</h1>"?>

      <!-- Image -->
      <center>
        <img src="./images/multiply.jpg" alt="Multiplication" height="300" width="300">
      </center>
      <br><br>

    <div id= "pink">
      
      <!-- Body text -->
       <?php echo"<p>This program will calulate the product of the two numbers you input.</p>" ?>
      
      <!-- Form for user input first number -->
        <form action="./results.php" method="post" target="results">        
        <label for="first-number">Enter a number:</label>
        <input type="number" step="1" id="first-number" placeholder="First Number..." name="first-number"><br><br>

      <!-- Form for user input second number -->
        <label for="second-number">Enter a second number:</label>
        <input type="number" step="1" id="second-number" placeholder="Second Number..." name="second-number"><br><br>

      <!--MDL Button-->
        <input type="submit" id="button" value="Submit Numbers" class="mdl-button mdl-js-button mdl-button--raised mdl-js-    ripple-effect mdl-button--accent">
      </form>
      <br>
      
      <!-- Div for to display range of numbers back to user -->
      <iframe name="results" id="results"></iframe>
      <br>
      <br>
    </main>
  </body>
</html>
