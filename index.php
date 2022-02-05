<?php
date_default_timezone_set('Europe/Moscow');

echo "<h1> hello world </h1>";
echo "<p>". date("d.m.y  H:i:s") . "</p>";
echo $_SERVER['SERVER_NAME'];

?>

<a href="variable_type.php"> ссылка на страницу</a>

<h1>форма</h1>
<form action="action.php">
    login <input type="text" name="name">
    password <input type="password" name="password">
    send <input type="submit" value="send">
</form>
