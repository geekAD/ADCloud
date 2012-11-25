<?php

$date = new DateTime(null, new DateTimeZone('Europe/Lisbon'));
echo $date->format('Y-m-d H:i') . "\n";
?>
