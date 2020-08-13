<?php

session_start();
$_SESSION['secure'] = rand(1000,9999);

?>

<img src="generate.php" />

<form accept="check.php" method="post">
Type the value you see: <input type="text" size="6" name="secure">
<input type="submit" name="submit" value="submit">

</form>
