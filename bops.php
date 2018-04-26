<!DOCTYPE html>
<html>
<?php
include("includes/init.php");
$current_page = "bops";
//arrays for function
$bop_examples = array("All Time Low"=> "Good Times", "Beyonce" => "Run the World (Girls)",
  "Florence + The Machine" => "Shake it Out", "Imagine Dragons" => "It's Time");
$bop_albums = array("All Time Low" => "/images/good_times.jpg", "Beyonce" => "/images/4.jpg",
  "Florence + The Machine" => "/images/ceremonials.jpg", "Imagine Dragons" => "/images/its_time.jpg");
$bop_explanations = array("All Time Low" => "This song describes the artists fond memories of the past
  <br> and that while he never wants to leave these happy moments,
  <br> when he does he won't forget these memories. This message plus it's upbeat style puts this as a bop",
  "Beyonce" => "This song is an anthem to girl power. <br>Between its energetic beat and this message, this song qualifies as a bop",
  "Florence + The Machine" => "Despite this song's catchy beat, it has a very powerful message about struggling through one's personal demons.
  <br> Because of this powerful message, this song is a bop.", "Imagine Dragons" => "This song's unique drumbeat makes it one to remember,
  <br> but the true reason it's a bop is because <br>its focus is that not changing yourself for others can be good. ");
$bop_sources = array("All Time Low" => "genius.com/All-time-low-good-times-lyrics",
  "Beyonce" => "itunes.apple.com/ca/album/4/626204707", "Florence + The Machine" => "www.amazon.com/Ceremonials-Florence-Machine/dp/B005QKYIZ2",
  "Imagine Dragons" => "genius.com/Imagine-dragons-its-time-lyrics");

$bops_list = array("Makes you want to sing and/or dance",
  "Has a message you approve of","Has a upbeat beat",
  "Is a song you want to listen to",
  "Is a song you put on playlists other than your party ones");
 ?>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />
    <script type="text/javascript" src="scripts/scroll_button.js"></script>
  <title>Bops</title>
</head>

<body>
  <?php
  include("includes/header.php");
   ?>
   <div class = "main">
     <h1 class = "page_title"> Bops </h1>
     <p class = "subtitle"><Strong>My definition:</strong> <em>A song that is both catchy and enjoyable to listen to. </em> </p>
     <button <?php echo $top_button ?>> Return to Top </button>
   <article class = "purple_section">
   <h2 class = "section_title"> Key Elements of Bops </h2>
   <ul>
     <?php
     createList($bops_list);
      ?>
   </ul>
 </article>
   <h2 class = "section_title"> Examples </h2>
   <p><em> Here are a few examples of bops. </em><br><br> You may not agree with these choices, which is completely okay!
     <br> Bop or Flop is subjective, everyone has different opinions on what's a bop or what's a flop.</p>
   <table>
    <?php
      createExamples ($bop_examples, $bop_albums, $bop_explanations, $bop_sources);
    ?>
   </table>
 </div>
   <?php
   include("includes/footer.php");
   ?>
</body>
</html>
