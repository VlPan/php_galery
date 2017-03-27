<?php
include 'data.php';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Photogalery</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="media/css/index.css">
</head>
<body>

<div class="container">

<div class="jumbotron">
  <h1>Photogalery</h1>
  <p>Simple realisation gallery with php</p>
  <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
</div>

<div class="row">
<?php
	foreach($arr_of_images as $image => $value){
 ?>

  <div class="col-xs-6 col-md-3">
    <a href="image.php?file=<?php echo $image ?>" class="thumbnail">
      <img src="media/images/<?php echo $value?>" alt="...">
    </a>
  </div>


 <?php
 }
 ?>


</div>
<div class="container">

 <form action="upload.php" method="POST" enctype="multipart/form-data">
    <h2>Select image to upload</h2>
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit" class="btn btn-default form-control">
</form>
</div>






</div>


</body>
</html>