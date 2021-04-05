<h1>HTML Forms</h1>
<form method="GET">
    <p><label for="input">User Input</label>
        <input type="text" name="input" size="40" />
    </p>
    <p><label for="otherinput">New Input</label>
        <input type="text" name="otherinput" size="20" />
    </p>
    <input type="submit" />
</form>
<pre>
$_GET:
<?php
print_r($_GET);
?>
</pre>