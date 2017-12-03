<!DOCTYPE html>
<html>
<body>
<H2>Resto</H2>
<?php
session_start();
$bdd=mysqli_connect('localhost','root','','devfest');

if(isset($_POST['logInButton'])){
	if(!empty($_POST['email_txt'])){
		if(!empty($_POST['pw_txt'])){
			$email=$_POST['email_txt'];
			$mdp=$_POST['pw_txt'];
			$sql="SELECT * FROM user WHERE login='$email'";
			$res=mysqli_query($bdd,$sql);
			$donnee=mysqli_fetch_assoc($res);
			$password=$donnee['password'];
			if($password!=$mdp){
				echo"<form action=Login.php></form>";
				echo "verifier votre mot de passe";
			}else{
		        $_SESSION['user']=$donnee['email'];
		        $_SESSION['role']=$donnee['role'];
				header("Location:abonne.php");
			}
		}
	}
}


?>
<form method="POST" >
		login<input type="text" name="log_txt" >
		password:<input type="text" name="pw_txt">
		<button type="submit" name="ok"> Log In</button>
</form>
</body>
</html>
