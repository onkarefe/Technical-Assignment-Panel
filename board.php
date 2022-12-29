<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Board</title>
</head>
    
</body>
</html>
<h1>Users</h1>
<?php

		if(array_key_exists('button1', $_POST)) {
			button1();
		}
		else if(array_key_exists('button2', $_POST)) {
			button2();
		}
		function button1() {
            include_once('login.php');
			$veri = $baglan->query("select * from users where stat = 'Enable'",PDO::FETCH_ASSOC);
            $veri->execute();
            echo "<table width = '50%' border='01'>
            <tr>
            <td width = '5%'><b>Id</td>
            <td width = '10%'><b>Username</b></td>
            <td width = '20%'><b>Email</b></td>
            <td width = '15%'><b>Status</b></td>
            </tr>";
            foreach ($veri as $satir){
                echo "<tr>
                <td>$satir[id]</td>
                <td>$satir[username]</td>
                <td>$satir[email]</td>
                <td>$satir[stat]</td>
                </tr>";
    };
		}
		function button2() {
			include_once('login.php');
			$veri = $baglan->query("select * from users",PDO::FETCH_ASSOC);
            $veri->execute();
            echo "<table width = '50%' border='1'>
            <tr>
            <td width = '5%'><b>Id</td>
            <td width = '10%'><b>Username</b></td>
            <td width = '20%'><b>Email</b></td>
            <td width = '15%'><b>Status</b></td>
            </tr>";
            foreach ($veri as $satir){
                echo "<tr>
                <td>$satir[id]</td>
                <td>$satir[username]</td>
                <td>$satir[email]</td>
                <td>$satir[stat]</td>
                </tr>";
            };
		}
	?>
	<form method="post">
		<input type="submit" name="button1"
				class="button" value="Enable" />
		
		<input type="submit" name="button2"
				class="button" value="All" />
	</form>
    <form method = "post" action = "panel.php">
        <input type = "submit" name = "newuser" value = "+add new user">
    </form>
    
</body>

</html>
