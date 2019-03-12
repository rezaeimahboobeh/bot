<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="email.php" method="POST">
   <input type="edit" name="address"/>
   <input type="submit" value="go"/>
</form>
  </body>
</html>

<?php
echo $_POST['address'];

echo "<br>";

// set API Access Key
$access_key = '9a75a0c77585151fbda39d753f90276d';

// set email address
$email_address = $_POST['address'];

// Initialize CURL:
$ch = curl_init('http://apilayer.net/api/check?access_key='.$access_key.'&email='.$email_address.'');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Store the data:
$json = curl_exec($ch);
curl_close($ch);

// Decode JSON response:
$validationResult = json_decode($json, true);
print_r($validationResult);

//echo "<br>";
// Access and use your preferred validation result objects
$validationResult['format_valid'];
$validationResult['smtp_check'];
$validationResult['score'];

 ?>
