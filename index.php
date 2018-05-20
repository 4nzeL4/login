<?php
		//panggil file koneksi ke database
		include 'config.php';

		//cek apakah user sudah menekan tombol login
		if (isset($_POST['login'])) {

				//variabel untuk validasi
					$user = $_POST['username'];
					$pass = md5($_POST['password']);

				$login = mysql_query("SELECT * FROM user WHERE username='$user' AND password='$pass'");
				$ketemu = mysql_num_rows($login);
				$d = mysql_fetch_array($login);
				if ($ketemu > 0 ) {
					
					//jika username dan password terdapat dalam database maka 
					//direct ke halaman admin

					header('location:dashboard.php');
				}
				else{
					//jika tidak di temukan maka tampilkan pesan error
					echo " <script>
					alert('username dan password salah!');
					</script>";
				}

			}		
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		.:: Halaman Login ::.
	</title>
</head>
<style type="text/css">
	body{
		font-family: arial;
		background-color: #eaeaea;
	}
	.login{
		background-color: white;
		padding-left: 300px;
		padding-top: 100px;
		padding-bottom: 100px;
		margin-left: 110px;
		margin-right: 110px;
		margin-top: 100px;
		box-shadow: 1px 1px 1px 1px black;

	}
	h1{
		font-size: 20px;
	}
	label{
		font-size: 20px;
	}
	#user{
		width: 200px;
		height: 24px;
	}
	#pass{
		width: 202px;
		height: 24px;
	}
	#login{
		margin-left: 160px;
		margin-top: 20px;
		width: 80px;
		height: 30px;
		background-color: blue;
		color: white;
	}
</style>
<body>

<div class="login">
	<h1>Selamat datang di halaman Login</h1><br>
<form action="" method="POST">
		<label for="user">Username : </label>
		<input type="username" name="username" placeholder="username" id="user"><br><br>
		<label for="pass">Password : </label>
		&nbsp;<input type="password" name="password" placeholder="password" id="pass"><br>
		<input type="submit" name="login" id="login">
</form>
</div>
</body>
</html>