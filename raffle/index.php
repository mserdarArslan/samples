<?php require "logic.php" ?>

<h1>Contestants</h1>

<?php
foreach ($contestants as $contestant => $result) {
    echo $contestant . " is a " . $result . ".<br>";
}
?>

<h1>Contestants</h1>

<pre>
	<?php print_r($contestants); ?>
</pre>