<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["name"]);
session_destroy();

echo "<script>
alert('logout successfull');
window.location='home.php';
</script>";

?>