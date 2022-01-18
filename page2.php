<!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8"/>
<title>Formulaires</title>
</head>
<body>
<?php
session_start();
if (isset($_SESSION ['login'])){
echo "bonjour et bon retour".$_SESSION['login'];
}
else {
$_SESSION['login']=$_GET['login'];
echo "bonjour  ".$_GET['login'];
echo "<a href=page3.php>vers page 3</a>";
}
?>
</body>
</html>
