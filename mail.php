<?php
$to = "mvaravinda@gmail.com";
$subject = "Hello Mail from Online News Portal";
$txt = "If the connection between the user and the system is broken prior to an order being either confirmed or canceled, the System shall enable the user to recover an incomplete order.";
$headers = "From: onlinenews@newsportal.online";
mail($to,$subject,$txt,$headers);
?>