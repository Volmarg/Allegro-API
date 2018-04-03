<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    <title></title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="style/global.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Additional External Scripts !-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>

	</head>
	<body style="display:flex;justify-content:center;flex-wrap:nowrap;">

<section class="content">

		<form action="lib/handlers/loginForm.php" type="GET">
			<input type="login" placeholder="Podaj login Allegro" name="login">
			<br/>
			<input type="password" placeholder="Podaj hasło Allegro" name="password">
			<br/><br/>
			<button type="submit" name="button" class="btn btn-info">Pobierz wyświetlenia obecnych aukcji</button>
		</form>

</section>

	</body>
</html>
