<?php 
include('inc/header.php');
include_once 'classes/class.inventory.php';
include_once 'classes/class.user.php';
include 'config/config.php';
$inventory = new Inventory();
$user = new User();
if(!$user->get_session()){
	header("location: login.php");
}
$user_id = $user->get_user_id($_SESSION['user_email']);
?>
<script src="js/dataTables.min.js"></script>	
<script src="js/jquery.dataTables.min.js"></script>	
<script src="js/common.js"></script>
<?php include('inc/container.php');?>
<?php include("menus.php"); ?>   
<?php include('inc/footer.php');?>






