<!DOCTYPE html>
<html>
<?php

include("includes/init.php");
$current_page = "flops";

//Arrays that will be used for the function
$flop_examples = array("Van Halen"=> "Hot for Teacher", "The Wanted" => "Glad You Came",
  "Robin Thicke" => "Blurred Lines", "Meghan Trainor" => "Dear Future Husband");
$flop_albums = array("Van Halen" => "/images/1984.jpg", "The Wanted" => "/images/glad_you_came.jpg",
  "Robin Thicke" => "/images/blurred_lines.jpg", "Meghan Trainor" => "/images/title.png");
$flop_explanations = array("Van Halen" => "This song may have a great beat, <br>but why is Van Halen singing about how hot his teacher is?",
  "The Wanted" => "This song has a perfect tempo for dancing,
  <br>but this song talks about giving girls more drinks and later going to have sex.
  <br>Not a great message to send. ", "Robin Thicke" => "With the line 'I know you want it' <br>this song is seen as rape-y and the video is seen as sexist by many.
  <br>However, it is hard to deny that this song is incredibly catchy", "Meghan Trainor" => "Of the flops, this song is most on edge between bop and flop.
  <br>However, many saw the video of this song as sexist <br> and the message of the husband accepting that
  <br> he is wrong in every fight makes this song fall into the flop catagory");
$flop_sources = array(
  "Van Halen" => "en.wikipedia.org/wiki/1984_<br>(Van_Halen_album)",
  "The Wanted" => "en.wikipedia.org/wiki/<br>Glad_You_Came",
  "Robin Thicke" => "www.billboard.com/articles<br>/review/5067719/<br>robin-thicke-blurred-lines-track-by-track-review",
  "Meghan Trainor" => "meghantrainor.<br>/wiki/Title_(EP)");

  $flops_list = array(
    "Makes you want to sing and/or dance",
    "Has a message you do <strong> not </strong> approve of",
    "Has a upbeat beat",
    "Is a song you don't want to listen to but you find yourself singing along
  or dancing along anyways",
    "Is a song that you might put on your party playlists");
 ?>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />
  <script type="text/javascript" src="scripts/scroll_button.js"></script>
  <title>Flops</title>
</head>

<body>
  <?php
  include("includes/header.php");
   ?>
   <div class = "main">
     <!--Title of this page -->
     <h1 class = "page_title"> Flops </h1>
     <p class = "subtitle"><strong> My definition:</strong> <em>A song that is catchy, but you know it's a terrible song and deep
       down inside of you, you don't want to listen to it.</em> </p>

    <button <?php echo $top_button ?>> Return to Top </button>
   <article class = "purple_section">
     <h2 class = "section_title "> Key Elements of Flops </h2>
     <ul>
       <?php
       createList($flops_list);
       ?>
    </ul>
 </article>

   <h2 class = "section_title"> Examples </h2>
   <p> <em>Here are a few examples of flops. </em> <br> <br>You may not agree with
     these choices, which is completely okay! <br> Bop or Flop is subjective,
     everyone has different opinions on what's a bop or what's a flop. </p>
     <table>
       <?php
       createExamples($flop_examples, $flop_albums, $flop_explanations, $flop_sources);
        ?>
     </table>
   </div>
   <?php
   include("includes/footer.php");
   ?>
</body>
</html>
