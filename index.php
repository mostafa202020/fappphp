
</head>
<body>
<?php
session_start();
if (!isset($_SESSION['login'])){
?>
<form method='GET' action=page2.php>

<p>Login: <input type="text" name="login"></p>
<input type="submit" value="Valider">
</form>

<?php
}
else {

header('Location:page2.php?login='.$_SESSION['login']);
}
?>
</body>

