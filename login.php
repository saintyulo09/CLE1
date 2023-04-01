<?php 
include_once 'config/config.php';
include 'classes/class.user.php';
include 'inc/header.php';

$user = new User();
if($user->get_session()){
	header("location: index.php");
}
if(isset($_REQUEST['submit'])){
	extract($_REQUEST);
	$login = $user->check_login($useremail,$password);
	if($login){
		header("location: index.php");
	}else{
		?>
        <div id='error_notif'>Wrong email or password.</div>
        <?php
	}
}
?>
<!DOCTYPE html>
<html>	
<head>
    <title>PETWINS</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/login.css?<?php echo time();?>">
</head>
	<body>
		<div id="login_container">
			<div id="brand-block">
		</div>
				<div id="login-block">
				<h3>Please login</h3>
	<form method="POST" action="" name="login">
	<div>
		<input type="email" class="input" required name="useremail" placeholder="Username"/>
	</div>
	<div>
		<input type="password" class="input" required name="password" placeholder="Password"/>
	</div>
	<div>
		<input type="submit" name="submit" value="Login"/>
	</div>
	</form>
			<img src="images/logo.png">
			</div>			
				</div>	
	</body>
</html>		
<?php include('inc/footer.php');?>