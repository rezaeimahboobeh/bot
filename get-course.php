<?php

header("Content-type:application/json");
$con = mysqli_connect("localhost","root","","blog");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

if ( isset ($_GET['id'])) {
$num=$_GET['id'];
$sql="SELECT * FROM courses WHERE  id=".$num."";
$result = $con->query($sql);
$row = $result->fetch_assoc();
$json_array = json_encode($row);
echo $json_array;

// target page: sflc.ir/admin/get-course.php?id=12


  // connect to db
  // get course table from db
  // push course details in an array
  // we have an array that contains our course deetails.
  // $array_course = array ( 'id' => '12', 'name' => 'This course'...)
  // set header of page to json
  //header("Content-type:application/json");
  // convert array to json
  // $json_array = json_encode($array);
  //echo $json_array
}

// get-course.php?w={}&h={}
/*$width = $_GET["w"];
$height = $_GET["h"];
$my_img = imagecreate( $width, $height );
$background = imagecolorallocate( $my_img, 0, 0, 255 );
$text_colour = imagecolorallocate( $my_img, 255, 255, 0 );
$line_colour = imagecolorallocate( $my_img, 128, 255, 0 );
imagestring( $my_img, 4, 30, 25, "thesitewizard.com", $text_colour );
imagesetthickness ( $my_img, 5 );
imageline( $my_img, 30, 45, 165, 45, $line_colour );

header( "Content-type: image/png" );
imagepng( $my_img );
imagecolordeallocate( $line_color );
imagecolordeallocate( $text_color );
imagecolordeallocate( $background );
imagedestroy( $my_img );*/

 ?>
