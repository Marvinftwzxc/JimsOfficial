<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

 <!--Css-->
 <link rel="stylesheet" href="../CSS/Index.css">

</head>

<body>
      
<?php 
   include './HomeNavigation.php'
?>

<gallery>
  <div class="container-fluid d-flex flex-column custom-font text-center ">
    <h1 class="text-center p-5 mt-5">Gallery</h1>
  <div class="row ">
     <div class="col-md-4">
        <img class="custom-gallery img-move shadow rounded py-3" src="../Images/PicOne.jpg">
        
        <img class="custom-gallery img-move shadow rounded py-3 " src="../Images/galleryOne.jpg">
        
     </div>
     <div class="col-md-4">
        <img class="custom-gallery-one img-move shadow rounded " src="../Images/GalleryTwo.jpg">
        
     </div>
     <div class="col-md-4">
        <img class="custom-gallery img-move shadow rounded py-3 " src="../Images/GalleryThree.jpg">
        
        <img class="custom-gallery img-move shadow rounded py-3 " src="../Images/GalleryFour.jpg">
        
     </div>

  </div>
 
  </div>
 
</gallery>


<?php
include './footer.php'
?>



  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>