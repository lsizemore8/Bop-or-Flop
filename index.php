<!DOCTYPE html>

<html>
<?php
include("includes/init.php");
$current_page = "index";

 ?>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />
  <title>Home</title>
</head>

<body>
  <?php
  include("includes/header.php");
   ?>
   <div class = "main">
   <section>
   <div class = "header_title">
     <h1 id = "title"> Categorize Catchy Songs </h1>
     <p id = "title_caption"> Ever wanted to differentiate between the catchy songs you enjoy <br>
       versus the catchy songs you hate but can't help but sing along?<br> Check out Bop or Flop,
       an easy, fun way to catagorize music! </p>
   </div>
 </section>
   <section>
     <div class = "row">
       <div class = "col" id = "about_section">
         <h2 class = "col_title"> About Bop vs. Flop </h2>
           <p class = "col_text"> <br><br><br>Click the arrow to learn more about the origin of <br>Bop vs. Flop! </p>
           <form method = "post" action = "about.php">
           <button class = "to_next_page" type = "submit" > </button></form>
      </div>
       <div class = "col" id = "bops_section">
          <h2 class = "col_title"> Bops </h2>
          <p class = "col_text"> <br><br><br>Click the arrow to learn more about what a bop is and see some examples! </p>
          <form method = "post" action = "bops.php">
              <button class = "to_next_page" type = "submit">  </button></form>
      </div>

       <div class = "col" id = "flops_section">
         <h2 class = "col_title"> Flops</h2>
         <p class = "col_text"> <br><br> <br>Click the arrow to learn more about what a flop is and see some examples! </p>
          <form method = "post" action = "flops.php"> <button class = "to_next_page" type = "submit"> </button> </form>
        </div>

     </div>
   </section>
 </div>
   <?php
   include("includes/footer.php");
   ?>
</body>
</html>
