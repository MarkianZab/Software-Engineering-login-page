<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
    echo "My university is ".$_SESSION["myuniversity"] . ".<br>";
    echo "And I am a " .$_SESSION["status"] . ".";
?>

</body>
</html>