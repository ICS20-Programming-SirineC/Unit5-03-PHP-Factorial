<!DOCTYPE html>
<html>
<head>
  <!-- Metadata -->
  <meta charset="utf-8">
  <meta name="description" content="Unit5-03-PHP-Factoial">
  <meta name="keywords" content="Immaculata, ICS2O">
  <meta name="author" content="Sirine Cherkaoui">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="./Favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./Favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./Favicon/favicon-16x16.png">
  <link rel="manifest" href="./Favicon/site.webmanifest">

<!-- Google's MDL -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.deep_orange-red.min.css" />
    
    <!-- CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    
    <!-- Web page title -->
    <title>Factorial, with PHP</title>
  </head>
  <body>
    
    <!-- Google's MDL -->
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  
      <!-- Web page heading -->
      <?php echo "<h1>Factorial, with PHP</h1>" ?>

      <!-- Image -->
      <center>
        <img src="./images/factorial.jpg" alt="Factorial" height="300" width="300">
      </center>
      <br><br>

    <div id= "turquoise"> </div>
      
      <!-- Body text -->
     <?php echo "<p>This program will calulate the factorial of the positive integer you input.</p>" ?>
      
      <!-- Form for user input of integer -->
        <form action="javascript:CalcFactorial()">
        <label for="user-integr">Enter a positive integer:</label>
        <input type="number" step="1" id="user-integer" name="user-integer" placeholder="eg. 5..."  ><br><br>

      <!--MDL Button-->
        <input type="submit" id="button" value="Calculate" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
      </form>
      <br>
      
      <!-- Div to display factorial back to user -->
      <div id="results"></div>
      <br>
      <br>
  </body>
</html>
