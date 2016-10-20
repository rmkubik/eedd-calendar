<?php
if (!isset($home_class))
  $home_class = "";
if (!isset($gamedev_class))
  $gamedev_class = "";
if (!isset($webdev_class))
  $webdev_class = "";
if (!isset($graphicdesign_class))
  $graphicdesign_class = "";
?>

<nav class="navbar navbar-default">
  <div class="container">
     <ul class="nav navbar-nav">
       <li class="<?php echo $home_class; ?>"><a href="../index.php">Home</a></li>
       <li role="presentation" class="dropdown <?php echo $gamedev_class; ?>">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Game Dev<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="../prototypes.php">Prototypes</a></li>
            <li><a href="../boardgame/index.php">Boardgame</a></li>
          </ul>
        </li>
        <li role="presentation" class="dropdown <?php echo $webdev_class; ?>">
           <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Web Dev<span class="caret"></span></a>
           <ul class="dropdown-menu">
             <li><a href="../calendar/index.php">Calendar</a></li>
           </ul>
        </li>
        <li role="presentation" class="dropdown <?php echo $graphicdesign_class; ?>">
           <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Graphic Design<span class="caret"></span></a>
           <ul class="dropdown-menu">
             <li><a href="../pixels.php">Pixel Art</a></li>
             <li><a href="../vectors.php">Vectors</a></li>
           </ul>
        </li>
     </ul>
   </div>
</nav>
