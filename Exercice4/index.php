<!--On commence par inclure la class chat précédemment créée -->
<?php require("chat.php"); ?>
<?php

// Ici on instance la class, ici trois nouveaux chats
$chat1 = new chat("Max", 15, "Roux", "Male", "Persan");
$chat2 = new chat("Axel", 8, "Blanc", "Femelle", "Rouquin");
$chat3 = new chat("Momo", 3, "Noir", "Male", "Aristote");
?>

<!-- Et ici nous affichons à l'aide de la méthode getInfos les différentes données en fonction du chat souhaité -->
<tbody>
<?php echo $chat1 ->getInfos();?><br>
<?php echo $chat2 ->getInfos();?><br>
<?php echo $chat3 -> getInfos();?>
</tbody>

