<?php

?>
<form action="index.php" method="post">
    <textarea name="user_input" rows="6" cols="30"><?php echo $user_input; ?></textarea>
    <br>Search For:<br>
    <input type = "text" name="search-for">
    <br>Replace with:<br>
    <input type="text" name="replace">
    <input type="submit" value="Submit">
</form>