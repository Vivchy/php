<?php
date_default_timezone_set('Europe/Moscow');

echo "<h1> hello world </h1>";
echo "<p>". date("d.m.y  H:i:s") . "</p>";
echo $_SERVER['SERVER_NAME'];

?>

<div><a href="variable_type.php"> variable</a></div>
<div><a href="array.php">array</a></div>
<div><a href="functions.php">functions</a></div>
<div><a href="generation.php">generation</a></div>

<h1>форма</h1>
<?php
if(!isset($_SERVER['QUERY_STRING'])){
?>
    <h1>форма</h1>
    <form action="<?=$_SERVER['SCRIPT_NAME'] ?>">

        <p>login <input type="text" name="name"></p>
        <p>password <input type="password" name="password"></p>
        <ul>
            <li> easy <input type="checkbox" name="check[]" value="easy"></li>
            <li> medium <input type="checkbox" name="check[]" value="medium"></li>
            <li> hard <input type="checkbox" name="check[]" value="hard"></li>
        </ul>
        <input type="submit" value="send">
    </form>

<?php }
else {
    if ($_REQUEST['name'] == 'user'){ ?>
        <h1>Access</h1>
        <p>hello <?= $_REQUEST['name']; ?> </p>

  <?php
        if (isset($_REQUEST['check'])){
            $check = $_REQUEST['check'];
            foreach ($check as $ch){
                echo "<p> $ch </p>";
            }
        }
    }

}?>
