<?php

$urlLogin = "/login.html";
$urlHome = "/dashhome.html";

$bLogin = true;

echo "<script>window.location = '" . ($bLogin ? $urlLogin : $urlHome) ."'</script>";

?>