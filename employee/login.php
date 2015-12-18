<?	session_start();
	print_r($_SESSION);
	var_dump($_POST);
?>
<form method="post" action="/employee/resources/php/accounts/secureLogin.php">
	Username: <input name="username" type="text">
	Password: <input name="password" type="password">
	<input name="submit" type="submit" value="login">
</form>

