<header>
<nav id = "navbar">
<a href = "index.php"> <img id = "logo" src = "images/logo.png" alt = "logo"> </a>

  <ul>
    <?php
    foreach($navLinks as $page => $name){
      if ($page == $current_page){
        $id = "id = 'current_page'";
      }
      else {
        $id = "";
      }
      echo "<li><a " . $id . " href='" . $page. ".php'>$name</a></li>";
    }
    ?>
  </ul>
</nav>
</header>
