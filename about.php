<!DOCTYPE html>
<html>
<?php
include("includes/init.php");
$current_page = "about";

 ?>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />
  <script type="text/javascript" src="scripts/scroll_button.js"></script>
  <title>About</title>
</head>

<body>
  <?php
  include("includes/header.php");
   ?>
   <div class = "main">
   <h1 class = "page_title"> About Bop vs. Flop </h1>
   <button <?php echo $top_button ?>> Return to Top </button>
   <section class = "origin">
     <h2 class = "section_title"> Origin of this Catagorization </h2>
     <p> Bop or flop first began one January evening, when my best friend and I
       were traveling in the car to a nearby grocery store. <br>We were listening to
       the radio when we realized that while there were numerous songs
       We were singing along to, we didn't actually like all of them. <br> <br>We decided to play
       a game: songs we liked and danced or sang to we added to the "bop" catagory, songs
       we disliked but couldn't help but sing we added to the flop catagory.<br> This game
       has since stuck with us, and it has grown from a simple game to a legitimate way
       to organize catchy songs. </p>
</section>
 <section class = "purple_section">
 <h2 class = "section_title"> How Did We Decide If a Song was a Bop or a Flop? </h2>
 <p> We looked at two things: </p>
 <ol>
   <li> How did the song make us feel? </li>
   <li> What was the message of the song? </li>
 </ol>
 <p> If the song made us feel like we couldn't help but dance or sing but we didn't
   want to or if the message of the song wasn't to our liking, we labeled the song
   a flop. <br>If the song how a message we liked and if we actually enjoyed the song for reasons
   other than it was fun to dance to, then it was a bop. </p>
 </section>
 <section class = "non_catchy">
   <h2 class = "section_title"> What About Non-Catchy Songs? </h2>
   <p> When we were designing this method, we decided to <strong> only stick with catchy songs. </strong> <br><br>
     With other songs, there's already a way to catagorize them: either you like them or you don't.
    <br> We only wanted to focus on those songs that made you want to dance whether you like them or not. </p>
   </section>
 </div>
   <?php
   include("includes/footer.php");
   ?>
</body>
</html>
