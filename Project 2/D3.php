<?php
session_start();
$_SESSION['gem 2'] = 1;
?>
<!DOCTYPE html>
<html>

    <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Walking around corner</title>
    <link rel="stylesheet" href="maze.css"/>
</head>

<body>


<div>
    <div class="container">
        <div class="header">
        <h1>Adventure Maze Game</h1>
	</div>

<img src="net.jpg" alt="TrappedNet" width="500" height="500">

<div class="question">
<p>You take this snaking pathway around a corner.</p>

<p>As you walk, your foot steps on a booby trap! A net deploys from the ceiling and you get tangled in it! The net is too tough to bite through or break though. It looks like you're trapped.</p>
<p>You have collected a Gem!
<img src="gem.jpg" alt="cave in" width="50" height="50"></p>
<p>This was a bad ending! Try again from the start or go back and check out the other endings!</p>
</div>

<div class="choice">
<button><a href="A1.html">Go to the start</a></button>
</div>
<button class="back"><a href="C2.html">Back</a></button>


<audio controls autoplay>

  <source src="Man Screaming Sound Effect (128 kbps).mp3" type="audio/mpeg">
  
  browser does not support the audio
  
  </audio>
  
  </div>
</div>
  
</body>
</html>
