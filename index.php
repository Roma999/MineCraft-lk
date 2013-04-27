<?php
// Hello
include '/config.php'; // settings for your shop
include 'buy_info.php'; // info of your ability
echo "<div>Welcom on '. $proj .'</div>";
$auth = "SELECT `realmoney` FROM `user` WHERE `id` = $us_id";
?>
