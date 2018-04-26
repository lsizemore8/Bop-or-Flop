<?php
$navLinks = array(
  "index"=>"Home", "about" => "About", "bops" => "Bops", "flops" => "Flops"
);
//HTML for the button is saved here since the button is used on multiple pages.
$top_button = "onclick= \"to_top()\" class = \"scroll_button\"  title=\"return to top \"";
//a function that take in arrays and output a list.
function createList ($list_items){
  foreach($list_items as $item){
    echo "<li>". $item. "</li>";
  }
}
//THE USER DEFINED FUNCTION! It is in init as it's used on two different pages.
function createExamples ($titles, $albums, $explanations, $sources)
//Takes input of 4 different associative arrays and organizes the data in each into a table
{
  //Echo lines deal with making new rows. The for each populates the columns in that row
  echo "<tr class = \"albums \"> <td class = \"table_title\"> <strong> Album covers </strong></td>";
  foreach ($albums as $artist => $album){
    echo "<td> <img class = \"album_cover\" src =$album alt = \"album_cover\"> </td> ";
  }
  echo "</tr> <tr class = \"artists\"> <td class = \"table_title\"> <strong> Title of example song and artist of said song
  </strong> </td>";
  foreach ($titles as $artist => $title){
    echo "<td>". $title . " <br> by  $artist </td>";
  }
  echo "</tr> <tr class = \"explanations \"> <td class = \"table_title\"> <strong> Why is this song in this catagory? </strong> </td>";
  foreach ($explanations as $artist => $explanation){
    echo "<td> <strong> Explanation: </strong> $explanation</td>";
  }
  echo "</tr> <tr class = \"sources \"> <td class = \"table_title\"> <strong> Sources of album cover pictures </strong> </td>";
  foreach($sources as $artist => $source){
    echo "<td> Source of picture:  $source</td>";
  }
  echo "</tr>";

}

 ?>
