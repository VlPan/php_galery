

<?php
$images = include 'data.php';
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Image <?php echo $_GET['file'] ?></title>
 	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 	<link rel="stylesheet" type="text/css" href="media/css/index.css">
 </head>
 <body>
<div class="container">
    <a href="#" class="thumbnail">
      <img src="media/images/<?php echo $images[$_GET['file']] ?>" alt="...">
    </a>
</div>



 </body>
 </html>