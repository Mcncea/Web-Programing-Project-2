<?php
session_start();
$_SESSION['gem 1'] = 1;
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Following light ahead</title>
    <link rel="stylesheet" href="maze.css"/>
</head>
<body>


<div>
    <div class="container">
        <div class="header">
        <h1>Adventure Maze Game</h1>
	</div>

<img src="collapse.jpg" alt="cave in" width="850" height="600">



<div class="question">
<p>You followed the light ahead of you.</p>
<p>You end up entering a room lit up with torches. As you step inside, there is a loud rumble, and the path behind you collapses with rubble. With no food or water, you end up spending the rest of your days sitting in this cave, until you die.</p>
<p>You have collected a Gem!
<img src="gem.jpg" alt="cave in" width="50" height="50"></p>
<p>This was a bad ending! Try again from the start or go back and check out the other endings!</p>
</div>

<div class="choice">
<button><a href="A1.html">Go to the start</a></button>
</div>
<button class="back"><a href="C1.html">Back</a></button>


<audio controls autoplay>

  <source src="mixkit-small-meteor-falling-1337.mp3" type="audio/mpeg">
  
  browser does not support the audio
  
  </audio>
  
  </div>
</div>
  
</body>
</html>
