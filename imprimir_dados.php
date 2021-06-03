<?php

$title = "User:";
$name = "Guilherme";
$last_name = "Ferreira";
$age = 31;
$email = "user@email.com";


?>

<h1><?php echo $title;?></h1>
<ul>
    <li>Name: <?php echo $name." ".$last_name; ?></li>
    <li>Age: <?= $age; ?></li>
    <li>E-mail: <?php echo $email; ?></li>
</ul>
