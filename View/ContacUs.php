<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!--CSS Design-->
  <link rel="stylesheet" href="../CSS/ContactUs.css">
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
<?php 
    include './HomeNavigation.php';
?>

<ContactUs>
    <div class="container-fluid  mt-25 p-5 ">
      <div class="row">
      <div class="col-5">
      <img src="../Images/contactUsImag.jpg" class="">
      </div>

    <div class="col-7 bg-primary mt-5 border w-50 text-center pt-4 ">
      <input type="text" size="40" class="p-2 mt-2 rounded" placeholder="Your Name"><br>
      <input type="Email" size="40" class="p-2 mt-2 rounded " placeholder="Your Email"><br>
      <input type="phone" size="40" class="p-2 mt-2 rounded" placeholder="Your Phone"><br>
      <textarea class="p-2 mt-2 w-50">
      </textarea><br>
      <div class="p-2">
      <input type="submit" class="">
      </div>
    </div>
    </div>
    </div>
   
</ContactUs>

<?php 
    include './Footer.php';
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