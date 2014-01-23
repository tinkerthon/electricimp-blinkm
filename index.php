<?php
$agent_url = 'https://agent.electricimp.com/BKKscXMm6-Lh';
$title = 'Wähle eine Farbe';
?><!DOCTYPE html>
<html>
  <head>
  	<title><?php echo $title; ?></title>
  	<meta charset="utf-8">
  </head>
  <body>
   	<p><?php echo $title; ?></p>
  	<form action="<?php echo $agent_url; ?>" method="GET">
      <input type="hidden" name="go" value="http://imp.local/">
      <input type="color" name="rgb" value="#000000"> 
      <input type="submit" name="ok" value="OK">
  	</form>
  </body>
</html>