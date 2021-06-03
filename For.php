<?php

// Repeat loop:

// for: s
/*
for ($i = 0;$i<=10;$i++){
    echo "list ".$i."<br/>";
}
*/
// while:

?>

<h1>Repeat loop</h1>

<h3>Using For</h3>
<ul>
    <?php for ($i = 0; $i <=50; $i++): ?>
        <li>List <?php echo $i; ?></li>
    <?php endfor; ?>
</ul>