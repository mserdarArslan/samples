<h1>Other Input Types...</h1>
<form method="post" action="forms_more.php">
    <p><label for="inp01">Account:</label>
        <input type="text" name="account" id="inp01" size="40">
    </p>
    <p><label for="inp02">Password:</label>
        <input type="password" name="pw" id="inp02" size="40">
    </p>
    <p><label for="inp03">Nick Name:</label>
        <input type="text" name="nick" id="inp03" size="40">
    </p>
    <p>Preferred Time:<br />
        <input type="radio" name="when" value="am">AM<br>
        <input type="radio" name="when" value="pm" checked>PM
    </p>
    <p>Classes taken:<br />
        <input type="checkbox" name="class1" value="si502" checked>
        SI502 - Networked Tech<br>
        <input type="checkbox" name="class2" value="si539">
        SI539 - App Engine<br>
        <input type="checkbox" name="class3">
        SI543 - Java<br>
    </p>
    <p><label for="inp06">Which city:
            <select name="city" id="inp06">
                <option value="0">-- Please Select --</option>
                <option value="1">Ankara</option>
                <option value="2">İstanbul</option>
                <option value="3">Kayseri</option>
                <option value="4">İzmir</option>
                <option value="5">Malatya</option>
            </select>
    </p>
    <p><label for="inp07">Which snack:
            <select name="snack" id="inp07">
                <option value="">-- Please Select --</option>
                <option value="chips">Chips</option>
                <option value="peanuts" selected>Peanuts</option>
                <option value="cookie">Cookie</option>
            </select>
    </p>
    <p><label for="inp08">Tell us about yourself:<br />
            <textarea rows="10" cols="40" id="inp08" name="about">
I love building web sites in PHP and MySQL.
    </textarea></p>
    <p><label for="inp09">Which are awesome?<br />
            <select multiple="multiple" name="code[]" id="inp09">
                <option value="python">Python</option>
                <option value="css">CSS</option>
                <option value="html">HTML</option>
                <option value="php">PHP</option>
            </select>
            <p>
                <input type="submit" name="dopost" value="Submit" />
                <input type="button" onclick="location.href='forms_more.php'; return false;" value="Escape">
            </p>
</form>
<pre>
$_POST:
<?php
print_r($_POST);
?>
</pre>