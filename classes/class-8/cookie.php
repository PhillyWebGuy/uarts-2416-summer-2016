<?php

$username = $_POST['username'];
$cookie_value = $username;

setcookie('user', $cookie_value, time()+3600);

?>



<html>
<body>
<form action="cookie.php" method="POST">
<input type="text" name="username">
<input type="text" name="password">
<input type="submit" value="Submit">
</form>
</body>
</html>
<?php

if (isset($_COOKIE["user"])) {
    echo "Welcome " . $_COOKIE["user"] . "!<br />";
} else {
    echo "Welcome guest!<br />";
}

?>