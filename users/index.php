<?php
include_once 'classes/class.user.php';
$user = new User();
?>
<div id="submenu">
    <a href="index.php?page=users">List Users</a> | <a href="index.php?page=users&action=create">New User</a> | Search <input type="text"/>
</div>
<div id="subcontent">
    <?php
      switch($action){
                case 'create':
                    require_once 'users/create-user.php';
                break; 
                case 'profile':
                    require_once 'users/view-profile.php';
                break;
                default:
                    require_once 'users/main.php';
                break; 
            }
    ?>
  </div>